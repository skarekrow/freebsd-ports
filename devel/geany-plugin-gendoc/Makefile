# $FreeBSD$

PORTNAME=	geany-plugin-gendoc
PORTVERSION=	${GEANY_VER}
CATEGORIES=	devel

MAINTAINER=	makc@FreeBSD.org
COMMENT=	Geany plugin: ${${GEANY_PLUGIN}_DESC}

LIB_DEPENDS=	libctpl.so:${PORTSDIR}/textproc/ctpl
RUN_DEPENDS=	${LOCALBASE}/bin/rst2html:${PORTSDIR}/textproc/py-docutils

.include "${.CURDIR}/../geany-plugins/files/Makefile.common"
.include <bsd.port.mk>
