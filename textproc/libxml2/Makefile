# Created by: Yukihiro Nakai <Nakai@technologist.com>
# $FreeBSD: head/textproc/libxml2/Makefile 354000 2014-05-13 21:25:15Z kwm $
#    $MCom: ports/trunk/textproc/libxml2/Makefile 19578 2014-04-25 21:50:30Z kwm $

PORTNAME=	libxml2
PORTVERSION=	2.9.2
PORTREVISION?=	2
CATEGORIES?=	textproc gnome
MASTER_SITES=	ftp://xmlsoft.org/libxml2/ \
		http://xmlsoft.org/sources/ \
		ftp://gd.tuwien.ac.at/pub/libxml/
DIST_SUBDIR=	gnome2

MAINTAINER?=	gnome@FreeBSD.org
COMMENT?=	XML parser library for GNOME

.if !defined(REFERENCE_PORT)

GNU_CONFIGURE=	yes
USES+=		cpe gmake iconv libtool pathfix pkgconfig shebangfix
CPE_VENDOR=	xmlsoft
USE_LDCONFIG=	yes
CONFIGURE_ARGS?=--with-iconv=${ICONV_PREFIX} \
		--with-html-dir=${PREFIX}/share/doc \
		--with-html-subdir=${PORTNAME} \
		--with-lzma=/usr \
		--without-python
INSTALL_TARGET=	install-strip
SHEBANG_FILES=	*.py */*.py */*/*.py

PLIST_SUB+=	LIBVERSION=${PORTVERSION}

.if !defined(MASTERDIR)

OPTIONS_DEFINE= SCHEMA THREADS MEM_DEBUG XMLLINT_HIST THREAD_ALLOC
OPTIONS_DEFAULT=SCHEMA THREADS
SCHEMA_DESC=	XML schema support
SCHEMA_CONFIGURE_WITH=	schemas
THREADS_DESC=	Threads support
THREADS_CONFIGURE_WITH=	threads
MEM_DEBUG_DESC= Memory debugging (DEVELOPERS ONLY!)
MEM_DEBUG_CONFIGURE_WITH=	mem-debug
XMLLINT_HIST_DESC= History for xmllint
XMLLINT_HIST_CONFIGURE_WITH=	history
THREAD_ALLOC_DESC= Per-thread memory (DEVELOPERS ONLY!)
THREAD_ALLOC_CONFIGURE_WITH=	thread-alloc

.endif # !defined(MASTERDIR)

post-patch:
.for d in . doc doc/devhelp doc/examples
	@${REINPLACE_CMD} -e '/^install-data-am:/ s|install-data-local||' \
		${WRKSRC}/${d}/Makefile.in
.endfor
.for f in catalog.c xmlcatalog.c xmllint.c doc/xmllint.1
	@${REINPLACE_CMD} -e \
		's|/etc/xml/catalog|${LOCALBASE}/share/xml/catalog|g; \
		 s|/etc/sgml/catalog|${LOCALBASE}/share/sgml/catalog|g' \
		${WRKSRC}/${f}
.endfor

.if !defined(MASTERDIR)
post-install:
	@${RM} -rf ${STAGEDIR}${PREFIX}/share/gtk-doc
.endif

.include <bsd.port.mk>

.endif
