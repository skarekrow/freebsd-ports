--- ../generic/tcldom.c.orig	2007-12-26 00:19:02.000000000 +0100
+++ ../generic/tcldom.c	2013-05-22 09:01:30.000000000 +0200
@@ -5915,6 +5915,9 @@
 |   tcldom_EvalLocked
 |
 \---------------------------------------------------------------------------*/
+#if !defined(Tcl_GetErrorLine)
+#define Tcl_GetErrorLine(interp) (interp->errorLine)
+#endif
 
 static
 int tcldom_EvalLocked (
@@ -5934,7 +5937,7 @@
     if (ret == TCL_ERROR) {
         char msg[64 + TCL_INTEGER_SPACE];
         sprintf(msg, "\n    (\"%s %s\" body line %d)", Tcl_GetString(objv[0]),
-                Tcl_GetString(objv[1]), interp->errorLine);
+                Tcl_GetString(objv[1]), Tcl_GetErrorLine(interp));
         Tcl_AddErrorInfo(interp, msg);
     }
 
