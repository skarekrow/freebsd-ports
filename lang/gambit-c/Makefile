# Created by: Rob Zinkov
# $FreeBSD$

PORTNAME=	gambit-c
DISTVERSION=	v4_7_6
PORTEPOCH=	1
CATEGORIES=	lang
MASTER_SITES=	http://www.iro.umontreal.ca/~gambit/download/gambit/v4.7/source/
DISTNAME=	gambc-${DISTVERSION}

MAINTAINER=	olgeni@FreeBSD.org
COMMENT=	Gambit programming system where the compiler generates portable C code

LICENSE=	APACHE20 LGPL21
LICENSE_COMB=	dual

USES=		compiler gmake tar:tgz
GNU_CONFIGURE=	yes
CONFIGURE_ARGS=	--enable-single-host \
		--enable-gcc-opts \
		--docdir=${DOCSDIR} \
		--includedir=${PREFIX}/include/gambit-c \
		--libdir=${PREFIX}/lib/gambit-c \
		--enable-compiler-name=gsc-gambit \
		--enable-interpreter-name=gsi-gambit
MAKEFILE=	makefile
USE_LDCONFIG=	${PREFIX}/lib/gambit-c

INFO=		gambit-c

OPTIONS_DEFINE=	GCC
OPTIONS_DEFAULT=GCC

GCC_DESC=	Build with GCC

.include <bsd.port.pre.mk>

.if ${PORT_OPTIONS:MGCC}
USE_GCC=	any
.endif

.if ${COMPILER_TYPE} == gcc
# This is needed because 4.2 < gcc -v < 4.4 has optimisations that make the
# build take more than 20Gb of virtual memory.
CFLAGS+=	-fno-move-loop-invariants
.endif

post-patch:
.for i in makefile.in gsc/makefile.in gsi/makefile.in lib/makefile.in
	@${REINPLACE_CMD} -e \
		's|^\(FLAGS_OBJ = \).*|\1 ${CFLAGS}| ; \
		 s|^\(FLAGS_DYN = \).*|\1 ${CFLAGS}|' ${WRKSRC}/${i}
.endfor

post-install:
	@${STRIP_CMD} ${STAGEDIR}${PREFIX}/bin/gs[ci]-gambit

.include <bsd.port.post.mk>
