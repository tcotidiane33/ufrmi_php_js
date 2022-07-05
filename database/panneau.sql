





/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  08/06/2022 16:06:14                      */
/*==============================================================*/


drop table if exists APPARTENIR;

drop table if exists CLIENT;

drop table if exists COMMUNE;

drop table if exists CONTRAT;

drop table if exists FACTURE;

drop table if exists PANNEAU;

drop table if exists REGLEMENT;

drop table if exists TYPE_REGLEMENT;

/*==============================================================*/
/* Table : APPARTENIR                                           */
/*==============================================================*/
create table APPARTENIR
(
   NUMCONT              varchar(256) not null,
   NUMPAN               varchar(256) not null,
   primary key (NUMCONT, NUMPAN)
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT
(
   NUMCLI               varchar(256) not null,
   CODECOM              varchar(256) not null,
   RAISONSOCIALECLI     char(256),
   TELCLI               text,
   ADRESSEPOSTALECLI    text,
   EMAILCLI             text,
   primary key (NUMCLI)
);

/*==============================================================*/
/* Table : COMMUNE                                              */
/*==============================================================*/
create table COMMUNE
(
   CODECOM              varchar(256) not null,
   LIBELLECOM           char(256),
   primary key (CODECOM)
);

/*==============================================================*/
/* Table : CONTRAT                                              */
/*==============================================================*/
create table CONTRAT
(
   NUMCONT              varchar(256) not null,
   NUMFACT              varchar(256) not null,
   NUMCLI               varchar(256) not null,
   DATESIGNATURECONT    date,
   primary key (NUMCONT)
);

/*==============================================================*/
/* Table : FACTURE                                              */
/*==============================================================*/
create table FACTURE
(
   NUMFACT              varchar(256) not null,
   DATEFACT             date,
   primary key (NUMFACT)
);

/*==============================================================*/
/* Table : PANNEAU                                              */
/*==============================================================*/
create table PANNEAU
(
   NUMPAN               varchar(256) not null,
   CODECOM              varchar(256) not null,
   FORMATPAN            int,
   TYPEPAN              char(256),
   SITEPAN              char(256),
   IMAGEPAN             longblob,
   ETATPAN              char(256),
   PRIXUNITAIREPAN      float(8,2),
   primary key (NUMPAN)
);

/*==============================================================*/
/* Table : REGLEMENT                                            */
/*==============================================================*/
create table REGLEMENT
(
   NUMREGL              varchar(256) not null,
   NUMFACT              varchar(256) not null,
   CODETYPEREG          varchar(256) not null,
   DATEREGL             date,
   MONTANTREGL          float(8,2),
   primary key (NUMREGL)
);

/*==============================================================*/
/* Table : TYPE_REGLEMENT                                       */
/*==============================================================*/
create table TYPE_REGLEMENT
(
   CODETYPEREG          varchar(256) not null,
   LIBELLETYPEREG       char(256),
   primary key (CODETYPEREG)
);

alter table APPARTENIR add constraint FK_APPARTENIR foreign key (NUMCONT)
      references CONTRAT (NUMCONT) on delete restrict on update restrict;

alter table APPARTENIR add constraint FK_APPARTENIR2 foreign key (NUMPAN)
      references PANNEAU (NUMPAN) on delete restrict on update restrict;

alter table CLIENT add constraint FK_TROUVER foreign key (CODECOM)
      references COMMUNE (CODECOM) on delete restrict on update restrict;

alter table CONTRAT add constraint FK_AVOIR foreign key (NUMFACT)
      references FACTURE (NUMFACT) on delete restrict on update restrict;

alter table CONTRAT add constraint FK_SIGNER foreign key (NUMCLI)
      references CLIENT (NUMCLI) on delete restrict on update restrict;

alter table PANNEAU add constraint FK_SITUER foreign key (CODECOM)
      references COMMUNE (CODECOM) on delete restrict on update restrict;

alter table REGLEMENT add constraint FK_CONCERNER foreign key (NUMFACT)
      references FACTURE (NUMFACT) on delete restrict on update restrict;

alter table REGLEMENT add constraint FK_ETRE foreign key (CODETYPEREG)
      references TYPE_REGLEMENT (CODETYPEREG) on delete restrict on update restrict;
