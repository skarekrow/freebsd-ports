# Created by: Sunpoet Po-Chuan Hsieh <sunpoet@FreeBSD.org>
# $FreeBSD$

PORTNAME=	rocksdb
PORTVERSION=	3.11.2
DISTVERSIONPREFIX=	rocksdb-
CATEGORIES=	databases

MAINTAINER=	sunpoet@FreeBSD.org
COMMENT=	Persistent key-value store for fast storage environments

LICENSE=	BSD3CLAUSE

LIB_DEPENDS=	libgflags.so:${PORTSDIR}/devel/gflags \
		libsnappy.so:${PORTSDIR}/archivers/snappy

ALL_TARGET=	shared_lib all
CFLAGS+=	-I${WRKSRC}/include -I${LOCALBASE}/include
CPPFLAGS+=	-DOS_FREEBSD
LDFLAGS+=	-L${LOCALBASE}/lib
USE_CXXSTD=	c++11
USE_LDCONFIG=	yes
USES=		compiler:c++11-lib gmake

GH_ACCOUNT=	facebook
USE_GITHUB=	yes

PROGRAMS=	db_bench db_repl_stress db_sanity_test db_stress ldb sst_dump table_reader_bench

.include <bsd.port.pre.mk>

.if ${OSVERSION} <= 1000000
CFLAGS+=	-D_GLIBCXX_USE_C99
.endif

.if ${COMPILER_TYPE} == clang && ${COMPILER_VERSION} >= 36
CXXFLAGS+=	-Wno-inconsistent-missing-override
.endif

post-patch:
	@${REINPLACE_CMD} -e '/^all: / s| $$(TESTS)||' ${WRKSRC}/Makefile
	@${REINPLACE_CMD} -e 's| -fno-builtin-memcmp||; s| -ltcmalloc||' ${WRKSRC}/build_tools/build_detect_platform
.if defined(WITHOUT_PROFILE)
	@${REINPLACE_CMD} -e '/pg = / s| -pg||' ${WRKSRC}/Makefile
.endif
# Disable SSE4.2 on i386 architecture to fix i386 builds on FreeBSD package building cluster
.if ${ARCH} == i386
	@${REINPLACE_CMD} -e 's|#ifdef __SSE4_2__|&DISABLED__|' ${WRKSRC}/util/crc32c.cc
.endif

do-install:
	${MKDIR} ${STAGEDIR}${PREFIX}/include/rocksdb/ ${STAGEDIR}${DATADIR}/
	cd ${WRKSRC}/ && ${INSTALL_PROGRAM} ${PROGRAMS} ${STAGEDIR}${PREFIX}/bin/
	cd ${WRKSRC}/include/rocksdb/ && ${COPYTREE_SHARE} . ${STAGEDIR}${PREFIX}/include/rocksdb/
	${INSTALL_DATA} ${WRKSRC}/librocksdb.a ${STAGEDIR}${PREFIX}/lib/
	${INSTALL_LIB} ${WRKSRC}/librocksdb.so ${STAGEDIR}${PREFIX}/lib/librocksdb.so.0
	${LN} -fs librocksdb.so.0 ${STAGEDIR}${PREFIX}/lib/librocksdb.so
	${INSTALL_DATA} ${WRKSRC}/make_config.mk ${STAGEDIR}${DATADIR}/

regression-test test: build
	cd ${WRKSRC}/ && ${SETENV} ${MAKE_ENV} ${MAKE_CMD} check

.include <bsd.port.post.mk>
