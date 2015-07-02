# $FreeBSD$

PORTNAME =      flocker-cli
PORTVERSION=    1.0.1
CATEGORIES=     sysutils python
MASTER_SITES=   https://clusterhq-archive.s3.amazonaws.com/python/
PKGNAMEPREFIX=  ${PYTHON_PKGNAMEPREFIX}
DISTNAME=       Flocker-${PORTVERSION}

MAINTAINER=     brandon@ixsystems.com
COMMENT=        Flocker is an open-source Container Data Volume Manager for your Dockerized applications.

LICENSE=        APACHE20

USES=           python:2.7
USE_PYTHON=     distutils autoplist

BOTH_DEPENDS=   py-virtualenv libffi openssl

BUILD_DEPENDS=  ${BOTH_DEPENDS}
RUN_DEPENDS=    ${BOTH_DEPENDS}

.include <bsd.port.mk>
