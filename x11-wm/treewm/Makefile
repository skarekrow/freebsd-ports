# Created by: Rudolf Polzer <freebsd-dr@durchnull.de>
# $FreeBSD$

PORTNAME=	treewm
PORTVERSION=	0.4.5
PORTREVISION=	6
CATEGORIES=	x11-wm
MASTER_SITES=	SF

MAINTAINER=	ports@FreeBSD.org
COMMENT=	Window manager that arranges windows in a tree

LICENSE=	GPLv2

OPTIONS_DEFINE=	DOCS EXAMPLES

USES=		gmake imake:env tar:bzip2
USE_XORG=	x11 ice sm xext xmu xpm xt xxf86vm

PORTDOCS=	AUTHORS ChangeLog INSTALL PROBLEMS README README.tiling TODO
PORTEXAMPLES=	default.cfg sample.cfg

.include <bsd.port.options.mk>

post-patch:
	@${REINPLACE_CMD} -e \
		'/^PREFIX/s| =| ?=| ; \
		 /^CXXFLAGS/s| =| ?=| ; \
		 s|/usr/X11R6|${LOCALBASE}|g' ${WRKSRC}/Makefile

do-install:
	(cd ${WRKSRC}/src && ${INSTALL_PROGRAM} treewm \
		${STAGEDIR}${PREFIX}/bin)
	(cd ${WRKSRC}/xprop && ${INSTALL_PROGRAM} xprop \
		${STAGEDIR}${PREFIX}/bin/xprop-treewm)
	(cd ${WRKSRC}/xkill && ${INSTALL_PROGRAM} xkill \
		${STAGEDIR}${PREFIX}/bin/xkill-treewm)
	@${MKDIR} ${STAGEDIR}${DATADIR}/pixmaps
	(cd ${WRKSRC}/src/pixmaps && ${INSTALL_DATA} *.xpm \
		${STAGEDIR}${DATADIR}/pixmaps)
	@${MKDIR} ${STAGEDIR}${DOCSDIR}
.for F in ${PORTDOCS}
	(cd ${WRKSRC} && ${INSTALL_DATA} ${F} ${STAGEDIR}${DOCSDIR})
.endfor
	@${MKDIR} ${STAGEDIR}${EXAMPLESDIR}
.for F in ${PORTEXAMPLES}
	(cd ${WRKSRC} && ${INSTALL_DATA} ${F} ${STAGEDIR}${EXAMPLESDIR})
.endfor

.include <bsd.port.mk>
