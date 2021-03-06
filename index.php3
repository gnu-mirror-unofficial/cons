<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<!--php3-->

<!-- cons web page -->
<!-- Copyright (C) 1998-2001 Free Software Foundation, Inc.-->

<!-- This program is free software; you can redistribute it and/or modify-->
<!-- it under the terms of the GNU General Public License as published by-->
<!-- the Free Software Foundation; either version 2 of the License, or-->
<!-- (at your option) any later version.-->

<!-- This program is distributed in the hope that it will be useful,-->
<!-- but WITHOUT ANY WARRANTY; without even the implied warranty of-->
<!-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the-->
<!-- GNU General Public License for more details.-->

<!-- You should have received a copy of the GNU General Public License-->
<!-- along with this program; see the file COPYING.  If not, write to-->
<!-- the Free Software Foundation, Inc., 59 Temple Place - Suite 330,-->
<!-- Boston, MA 02111-1307, USA.-->

<HTML>
<HEAD>
    <TITLE>CONS: A Make replacement</TITLE>
    <META NAME="Description" CONTENT="Cons - A Make Replacement.">
    <META NAME="Keywords" CONTENT="cons, make, build, software, build software,
    software build, construction system, software construction system">
    <!-- $Id: index.php3,v 1.2 2001/05/29 14:58:02 rv Exp $ -->
</HEAD>

<BODY BGCOLOR="#FFFFFF">

<H1 ALIGN=CENTER>CONS</H1>
<DL>
<DT><H3>What is CONS?</H3>
<DD>
Do you use Makefiles for your project?  Have you ever done a "make clean;
make all" just because you didn't know if the files you changed would be
rebuilt correctly?  Or perhaps you work on several machines accessing an
NFS server, and if their clocks aren't in sync, make won't know to rebuild
things?  Well, welcome to a new and better way to control the building of
your projects.

<P><DD>

CONS is a replacement for MAKE.  It is not compatible with make, but it has
a number of powerful capabilities not found in other software construction
systems, including make.  It is distributed under the
<A HREF="http://www.gnu.org/copyleft/copyleft.html"> GNU General Public
License (GPL).</A>

<P><DD>

CONS is implemented in Perl.  You don't need to know Perl to use CONS,
although you can use it more powerfully if you do.

<DD>

To use CONS, you will need <A HREF="http://language.perl.com">Perl</A> 5.003
or better and the Perl
<A HREF="http://www.cpan.org/modules/by-module/Digest/">Digest::MD5</A>
module, available from CPAN
(Digest-MD5-*.tar.gz).

<P><DD>

CONS is known to work on a variety of platforms.  It's in production use on
versions of AIX, FreeBSD, HPUX, IRIX, Linux, Solaris, SunOS, and Windows NT.

<DT><H3>Where can I get CONS?</H3>

<DD>
<?php $stablever = file("stable/VERSION"); $stablever[0] = chop($stablever[0]); $devver = file("dev/VERSION"); $devver[0] = chop($devver[0]); ?>

The latest <b>stable version</b> of CONS is <?php echo $stablever[0];?>.
<br>
The latest <b>development version</b> of CONS is <?php echo $devver[0];?>.
<br>
For a description of the changes in these releases, please read the release
notes and change logs, below.

<P><DD>

<TABLE WIDTH="80%" ALIGN="center" CELLPADDING="4">
<TR>
<TH></TH>
<TH ALIGN="center">Stable version<BR><?php echo $stablever[0];?></TH>
<TH ALIGN="center">Development version<BR><?php echo $devver[0];?></TH>
</TR>

<TR>
<TH ALIGN="left">
Documentation
</TH>
<TD ALIGN="center">
<A HREF="stable/RELEASE-<?php echo $stablever[0];?>">Release notes</A>
<BR>
<A HREF="stable/CHANGES-<?php echo $stablever[0];?>">Change log</A>
<BR>
<A HREF="stable/cons.html">HTML Manual</A>
</TD>
<TD ALIGN="center">
<A HREF="dev/RELEASE-<?php echo $devver[0];?>">Release notes</A>
<BR>
<A HREF="dev/CHANGES-<?php echo $devver[0];?>">Change log</A>
<BR>
<A HREF="dev/cons.html">HTML Manual</A>
</TD>
</TR>

<TR>
<TH ALIGN="left">
cons package<BR>
(Cons and documentation)<BR>
</TH>
<TD ALIGN="center">
<A HREF="stable/cons-<?php echo $stablever[0];?>.tgz">.tgz</A><BR>
<A HREF="stable/cons-<?php echo $stablever[0];?>-1.noarch.rpm">.rpm</A><BR>
<A HREF="stable/cons_<?php echo $stablever[0];?>-1.deb">.deb</A><BR>
</TD>
<TD ALIGN="center">
<A HREF="dev/cons-<?php echo $devver[0];?>.tgz">.tgz</A><BR>
<A HREF="dev/cons-<?php echo $devver[0];?>-1.noarch.rpm">.rpm</A><BR>
<A HREF="dev/cons_<?php echo $devver[0];?>-1.deb">.deb</A><BR>
</TD>
</TR>

<TR>
<TH ALIGN="left">
cons-test package<BR>
(cons-test script,<BR>
regression tests,<BR>
supporting modules)<BR>
</TH>
<TD ALIGN="center">
<A HREF="stable/cons-test-<?php echo $stablever[0];?>.tgz">.tgz</A><BR>
<A HREF="stable/cons-test-<?php echo $stablever[0];?>-1.noarch.rpm">.rpm</A><BR>
<A HREF="stable/cons-test_<?php echo $stablever[0];?>-1.deb">.deb</A><BR>
</TD>
<TD ALIGN="center">
<A HREF="dev/cons-test-<?php echo $devver[0];?>.tgz">.tgz</A><BR>
<A HREF="dev/cons-test-<?php echo $devver[0];?>-1.noarch.rpm">.rpm</A><BR>
<A HREF="dev/cons-test_<?php echo $devver[0];?>-1.deb">.deb</A><BR>
</TD>
</TR>

<TR>
<TH ALIGN="left">
source RPM<BR>
(both .tgz files<BR>
and .spec)
</TH>
<TD ALIGN="center">
<A HREF="stable/cons-<?php echo $stablever[0];?>-1.src.rpm">.src.rpm</A><BR>
</TD>
<TD ALIGN="center">
<A HREF="dev/cons-<?php echo $devver[0];?>-1.src.rpm">.src.rpm</A><BR>
</TD
</TR>

<TR>
<TH ALIGN="left">
checksums<BR>
</TH>
<TD ALIGN="center">
<A HREF="stable/md5-<?php echo $stablever[0];?>">MD5</A><BR>
</TD>
<TD ALIGN="center">
<A HREF="dev/md5-<?php echo $devver[0];?>">MD5</A><BR>
</TD
</TR>

</TABLE>

<P><DD>

Each version of Cons has two related packages:
the <B>cons</B> package,
which contains Cons itself and its documentation,
and the <B>cons-test</B> package,
which contains a full set of portable Cons regression tests
and a script for executing them.
If you're just interested in running Cons,
you only need the <B>cons</B> package.
The <B>cons-test</B> package is for people
who are planning to add new features to Cons and want to make sure they
don't break existing functionality, or who want to verify that Cons
works correctly on their system.

<P><DD>

(Note that the <B>cons-test</B> package
no longer contains a copy of the Cons script itself;
you must now install both packages
if you're planning on working with the test suite.)

<P><DD>

For verification purposes, MD5 checksums exist for each package.

<P><DD>

<!--
Older versions of CONS can be found <A HREF="old/">here</A>.
<P><DD>
-->

<h4>Other Web Mirrors</h4>
<P>
<UL>
<LI><A HREF="http://www.baldmt.com/cons/">http://www.baldmt.com/cons/</A></LI><LI><A HREF="http://www.dsmit.com/cons/">http://www.dsmit.com/cons/</A></LI><LI><A HREF="http://members.home.com/garsh/cons/">http://members.home.com/garsh/cons/</A></LI>
</UL>
<P><DD>

<h4>FTP Mirrors</h4>
<P>
<UL>
<LI><A HREF="ftp://ftp.gnu.org/gnu/cons/">ftp://ftp.gnu.org/gnu/cons/</A></LI>
</UL>
<P><DD>

<h4>AnonCVS Access</h4>

CONS is also available as read-only source from our CVS repository <A
HREF="http://subversions.gnu.org/cgi-bin/cvsweb/cons/">subversions.gnu.org</A>.
To download the sources for browsing, do the following.
<br>
<pre>
$ cvs -d :pserver:anoncvs@subversions.gnu.org:/cvs login
Password: <i>[just hit enter]</i>
$
</pre>

You only need to login once, as CVS will save your password in
~/.cvspass. After that, you can do any CVS operation, such as:

<pre>
$ cvs -d :pserver:anoncvs@subversions.gnu.org:/cvs checkout cons
[...]
</pre>
<P><DD>

<H4>CPAN</H4>
For a list of CPAN mirrors, see <A
HREF="http://www.yahoo.com/computers_and_internet/programming_languages/perl/cpan___comprehensive_perl_archive_network/">Yahoo's
list</A>.
<P><DD>

<H4>OS Packages</H4>
<UL>
<LI><B>Cons</B> and <B>cons-test</B> are part of the <A HREF="http://www.freebsd.org">FreeBSD</A> <A HREF="http://www.freebsd.org/ports/devel.html">Ports Collection</A>.</LI>
<LI><B>Cons</B> and <B>cons-test</B> are distributed for Linux as RPM (RedHat) and DEB (Debian) Packages</LI>
</UL>
<P><DD>

<DT><H3>Information about CONS</H3>

<P><DD>

The official CONS Reference Manual is now embedded in the CONS program
itself, and can be read using <B>perldoc</B>.

<P><DD>

An <A HREF="http://www.baldmt.com/cons-faq/">FAQ</A> for Cons is available.
If you're new to CONS,
take a look to see if your questions are already addressed there.

<P><DD>

A mailing list, <A
HREF="mailto:cons-discuss@gnu.org">cons-discuss@gnu.org</A>, has
been created.

If you wish to subscribe, do one of two things:
<ul>
<li>Goto <a href="http://mail.gnu.org/mailman/listinfo/cons-discuss">
http://mail.gnu.org/mailman/listinfo/cons-discuss</a>, or
<li>send mail to <A HREF="mailto:cons-discuss-request@gnu.org">
cons-discuss-request@gnu.org</A> with the word "subscribe" in the BODY
of the message.
</ul>
Please send all comments, requests, complaints, etc. to the mailing list.

<br>
The CONS mailing list is archived at
<a href="http://mail.gnu.org/pipermail/cons-discuss">
http://mail.gnu.org/pipermail/cons-discuss</a>
<P><DD>

CONS has an <A HREF="http://freshmeat.net/projects/cons/">appindex</A>
entry at the <A HREF="http://www.freshmeat.net/">freshmeat.net</A>
Open Source project directory.
<P><DD>

An article about CONS appeared in
<A HREF="http://www.tpj.com/">
The Perl Journal</A>, issue #9, Spring 1998.

<P><DD>

CONS was originally created by Bob Sidebotham.  It is currently being
maintained by <A HREF="mailto:rv@dsmit.com">Rajesh Vaidheeswarran</A>.  This
web page is being maintained by The GNU Project.  If you wish to contact
any of these people regarding CONS, please send your message to the
cons-discuss mailing list.

<P>

<h4>Mirroring CONS</h4>
If you are interested in mirroring CONS on your web site, please do one of
the following.
<p>
<ul>
<li>Check the file <b>Mirrors</b> in the CONS CVS source tree and follow
instructions.</li>

<li>Contact
<A HREF="mailto:rv@dsmit.com?subject='cons mirror'">Rajesh Vaidheeswarran</A>
regarding this.</li>
</ul>


<DT><H3>And finally,</H3>

<P><DD>

The CONS community would like to thank <A
HREF="http://www.gnu.org/">The Free Software Foundation</a> for graciously hosting
this CONS mirror.

</DL>
<BR><BR><BR>
<FONT SIZE="-1">

Last updated: Tue May 29 2001.

<BR>

Send comments and suggestions to the cons-discuss mailing list.

<BR>

Website-specific comments may be sent to <A
HREF="mailto:cons-discuss-request@gnu.org">cons-discuss-request@gnu.org</A>

</FONT>
</HTML>
