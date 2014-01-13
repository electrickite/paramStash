paramStash
==========

A MODX Revolution extra that grabs URL parameters from the query string and
stashes them in the user session for later use.

This could be used to pass parameters to an external site for user tracking
purposes.

Usage
-----

The package will install a plugin set to trigger when initializing a web page.
By default, this will place any URL parameters in the current query string into
an array in the user session. Each parameter in the stash will persist for a
specified lifetime, by default for one hour. If the value for a parameter in the
query string is different than the value in the stash, the stash will be updated
to reflect the new value and the lifetime for that parameter will be reset.

Two system settings control the behavior of the plugin:

  - paramstash.params: A comma separated list of paramters to allow in the
    stash.
    Default: all paramters (except 'q') will be stored.
  - paramstash.lifetime: The amount of time (in seconds) a parameter will remain
    in the stash.
    Default: 3600

To retrieve parameters from the stash, use the paramStash snippet.
`[[!paramStash]]` will return everything in the stash in key=value format. If
mulltiple paramters are stashed, they are separated by an ampersand. paramStash
has the following options:

  - params: A comma separated list of paramters to fetch. If no paramters are
    specified, they are all retrieved.
    Default: all parameters
  - separator: If set, a URL query string separator (?) will be prepended to the
    snippet output.
    Default: 0
  - valueOnly: Only return the parameter values, do not display names.
    Default: 0

Examples
--------

URL: http://example.com/about.html?foo=bar&baz=boo

`[[!paramStash]]` returns `foo=bar&baz=boo`

``[[!paramStash? &params=`foo` &separator=`1`]]`` returns `?foo=bar`

``[[!paramStash? &params=`foo` &viewOnly=`1`]]`` returns `bar`


Author: Corey Hinshaw <hinshaw.25@osu.edu>

paramStash is free software; you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the Free
Software Foundation; either version 2 of the License, or (at your option) any
later version.

paramStash is distributed in the hope that it will be useful, but 
WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more 
details.

You should have received a copy of the GNU General Public License along with
this software; if not, write to the Free Software Foundation, Inc., 59 Temple
Place, Suite 330, Boston, MA 02111-1307 USA

The GNU General Public License is avilable in 
core/components/inheritresourcegroups/docs/license.txt
