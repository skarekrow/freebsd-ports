# $FreeBSD$

PORTNAME=	libstrophe
PORTVERSION=	0.8.7
CATEGORIES=	net-im

MAINTAINER=	arved@FreeBSD.org
COMMENT=	Lightweight XMPP library

LICENSE=	MIT
LICENSE_FILE=	${WRKSRC}/MIT-LICENSE.txt

LIB_DEPENDS=	libexpat.so:${PORTSDIR}/textproc/expat2

USE_GITHUB=	yes
GH_ACCOUNT=	strophe
GH_TAGNAME=	2093aac
USES=		libtool pkgconfig autoreconf
GNU_CONFIGURE=	yes
CONFIGURE_ARGS+=	--with-pkgconfigdir=${PREFIX}/libdata/pkgconfig
USE_OPENSSL=	yes
USE_LDCONFIG=	yes

.include <bsd.port.mk>
