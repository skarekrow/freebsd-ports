# Created by: Gustau Perez i Querol <gustau.perez@gmail.com>
# $FreeBSD$

PORTNAME=	gnome-shell-extension-lockkeys
PORTVERSION=	0.0.0.20141126
CATEGORIES=	deskutils gnome
DIST_SUBDIR=	gnome3

MAINTAINER=	gnome@FreeBSD.org
COMMENT=	Gnome-shell Numlock and Capslock indicator

BUILD_DEPENDS=	gnome-shell>=0:${PORTSDIR}/x11/gnome-shell \
		gsettings-desktop-schemas>=3.12.0:${PORTSDIR}/devel/gsettings-desktop-schemas
RUN_DEPENDS=	gnome-shell>=0:${PORTSDIR}/x11/gnome-shell \
		gsettings-desktop-schemas>=3.12.0:${PORTSDIR}/devel/gsettings-desktop-schemas

USES=		gettext gmake pkgconfig tar:xz
USE_GNOME=	glib20
USE_GITHUB=	yes
CPPFLAGS+=	-I${LOCALBASE}/include
LDFLAGS+=	-L${LOCALBASE}/lib
GLIB_SCHEMAS=	org.gnome.shell.extensions.lockkeys.gschema.xml

GH_ACCOUNT=	kazysmaster
GH_TAGNAME=	cbfdb59

PKGMESSAGE=	../gnome-shell-extra-extensions/pkg-message.slaves

NO_BUILD=	yes

do-install:
		@${MKDIR} ${STAGEDIR}${PREFIX}/share/glib-2.0/schemas/
		@${MKDIR} ${STAGEDIR}${PREFIX}/share/gnome-shell/extensions/
		@(cd ${WRKSRC} && ${CP} lockkeys\@vaina.lt/schemas/org.gnome.shell.extensions.lockkeys.gschema.xml \
			${STAGEDIR}${PREFIX}/share/glib-2.0/schemas/)
		@${RM} -fr ${WRKSRC}/lockkeys\@vaina.lt/schemas/
		@(cd ${WRKSRC} && ${CP} -pPR lockkeys\@vaina.lt \
			${STAGEDIR}${PREFIX}/share/gnome-shell/extensions/)

.include <bsd.port.mk>
