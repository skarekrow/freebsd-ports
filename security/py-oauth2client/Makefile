# Created by: Sunpoet Po-Chuan Hsieh <sunpoet@FreeBSD.org>
# $FreeBSD$

PORTNAME=	oauth2client
PORTVERSION=	1.4.11
CATEGORIES=	security python
MASTER_SITES=	CHEESESHOP
PKGNAMEPREFIX=	${PYTHON_PKGNAMEPREFIX}

MAINTAINER=	sunpoet@FreeBSD.org
COMMENT=	OAuth 2.0 client library

LICENSE=	APACHE20

RUN_DEPENDS=	${PYTHON_PKGNAMEPREFIX}asn1>=0.1.7:${PORTSDIR}/devel/py-asn1 \
		${PYTHON_PKGNAMEPREFIX}asn1-modules>=0.0.5:${PORTSDIR}/devel/py-asn1-modules \
		${PYTHON_PKGNAMEPREFIX}httplib2>=0.9.1:${PORTSDIR}/www/py-httplib2 \
		${PYTHON_PKGNAMEPREFIX}rsa>=3.1.4:${PORTSDIR}/security/py-rsa \
		${PYTHON_PKGNAMEPREFIX}six>=1.6.1:${PORTSDIR}/devel/py-six

NO_ARCH=	yes
USE_PYTHON=	autoplist distutils
USES=		python

.include <bsd.port.mk>
