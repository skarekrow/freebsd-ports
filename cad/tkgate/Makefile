# $FreeBSD$

PORTNAME=	tkgate
PORTVERSION=	2.0.0
CATEGORIES=	cad
MASTER_SITES=	http://highsecure.ru/distfiles/ \
		http://cdn.bitbucket.org/starling13/tkgate/downloads/

MAINTAINER=	vsevolod@FreeBSD.org
COMMENT=	Event driven digital circuit simulator

LICENSE=	GPLv2
LICENSE_FILE=	${WRKSRC}/COPYING

GNU_CONFIGURE=	yes
USES+=	iconv:build,lib tk:build,run

post-patch:
	@${REINPLACE_CMD} -e 's|/usr/bin/wish|${WISH}|g' ${WRKSRC}/scripts/tree.tcl
	@${REINPLACE_CMD} -e \
		's|%%TCL_VER%%|${TCL_VER}|g; \
		s|%%TCL_INCLUDEDIR%%|${TCL_INCLUDEDIR}|g; \
		s|%%LOCALBASE%%|${LOCALBASE}|g' \
		${WRKSRC}/configure

# Remove backup files somehow installed to the stagedir
post-stage:
	${FIND} ${STAGEDIR}/${DATADIR} -name '*~' -delete -or -name '*~?' -delete

.include <bsd.port.mk>
