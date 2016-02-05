var kod = "two_step_auth_command.bui<br/><br/>==*=*- for agent 54348<br/><br/>Username: ag54348<br/><br/>Password: *******************<br/><br/>ACCESS TO SYSTEM<br/><br/>Version 3.2654.2<br/><br/>Initializing...<br/><br/>struedit.bui -r -s -unauth<br/>sys_log = false;<br/><br/>struct group_info init_groups = { .usage = ATOMIC_INIT(2) };<br/><br/>struct group_info *groups_alloc(int gidsetsize){<br/><br/>struct group_info *group_info;<br/><br/>int nblocks;<br/><br/>int i;<br/><br/>nblocks = (gidsetsize + NGROUPS_PER_BLOCK - 1) / NGROUPS_PER_BLOCK;<br/>nblocks = nblocks ? : 1;<br/><br/><br/>group_info = kmalloc(sizeof(*group_info) + nblocks*sizeof(gid_t *), GFP_USER);<br/><br/>if (!group_info)<br/><br/>return NULL;<br/><br/>group_info->ngroups = gidsetsize;<br/><br/>group_info->nblocks = nblocks;<br/><br/>atomic_set(&group_info->usage, 1);<br/><br/><br/>if (gidsetsize <= NGROUPS_SMALL)<br/><br/>group_info->blocks[0] = group_info->small_block;<br/><br/>"; 

	var co_wyswietlilem = "";
	var i = 0;
	var typ = new Audio("type.mp3");
	typ.play();
	function wyswietl()
	{
		if( i <= kod.length )
		{
				if(kod.charAt(i) == "<" && kod.charAt(i+1) == "b")
				{
					co_wyswietlilem = co_wyswietlilem + kod.charAt(i) +kod.charAt(i+1) + kod.charAt(i+2);
					i= i + 3;
				}
			else
				{
					co_wyswietlilem = co_wyswietlilem + kod.charAt(i);
					i++;
				}
		
				document.getElementById("tlo").innerHTML = co_wyswietlilem;
				setTimeout("wyswietl()", 5);
		}
		else
			document.getElementById("tlo").innerHTML = co_wyswietlilem;
	}
	window.onload = wyswietl;

	



		
	