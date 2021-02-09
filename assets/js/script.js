init = 0

default_mods_button = document.getElementById("default_mods_button");
dark_mods_button = document.getElementById("dark_mods_button");
unicorn_mods_button = document.getElementById("unicorn_mods_button");

navbar = document.getElementById("navbar");


/************************************************************************************************************************/
/*************************************************   DEFAULT MODS   *****************************************************/
/************************************************************************************************************************/

function default_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = "#ecf0f1";
        init == 1;
    } else {
        default_mods_button.style.backgroundColor = "red";
    }
}


/************************************************************************************************************************/
/**********************************************   DARK MOD MOUAHAHAHA   *************************************************/
/************************************************************************************************************************/



function dark_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = "#2c3e50";
        init == 1;
    } else {
        dark_mods_button.style.backgroundColor = "red";
    }
}

/************************************************************************************************************************/
/**************************************************   UNICORN MOD   *****************************************************/
/************************************************************************************************************************/

function unicorn_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = ""
        init == 1;
    } else {
        unicorn_mods_button.style.backgroundColor = "red";
    }
}
