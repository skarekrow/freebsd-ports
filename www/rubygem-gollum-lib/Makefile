# Created by: Johannes Meixner <xmj@chaot.net>
# $FreeBSD$

PORTNAME=	gollum-lib
PORTVERSION=	4.0.3
CATEGORIES=	www rubygems
MASTER_SITES=	RG

MAINTAINER=	ruby@FreeBSD.org
COMMENT=	Simple, Git-powered wiki with a sweet API and local frontend

LICENSE=	MIT
LICENSE_FILE=	${WRKSRC}/LICENSE

RUN_DEPENDS=	rubygem-github-markup>=1.3.3:${PORTSDIR}/textproc/rubygem-github-markup \
		rubygem-gollum-grit_adapter>=1.0:${PORTSDIR}/www/rubygem-gollum-grit_adapter \
		rubygem-nokogiri>=1.6.4:${PORTSDIR}/textproc/rubygem-nokogiri \
		rubygem-rouge>=1.7.4:${PORTSDIR}/textproc/rubygem-rouge \
		rubygem-sanitize>=2.1.0:${PORTSDIR}/textproc/rubygem-sanitize \
		rubygem-stringex>=2.5.1:${PORTSDIR}/devel/rubygem-stringex

USE_RUBY=	yes
USE_RUBYGEMS=	yes
RUBYGEM_AUTOPLIST=	yes

.include <bsd.port.mk>
