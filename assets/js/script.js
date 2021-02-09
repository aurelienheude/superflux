init = 0

white_mods_button = document.getElementById("white_mods_button");
dark_mods_button = document.getElementById("dark_mods_button");
default_mods_button = document.getElementById("default_button");

navbar = document.getElementById("navbar");
body = document.getElementById("body");
button = document.getElementById("button");
text = document.getElementById("text");
container_parent = document.getElementById("container_parent");
branding = document.getElementById("branding");

/************************************************************************************************************************/
/*************************************************   DEFAULT MODS   *****************************************************/
/************************************************************************************************************************/

function white_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = "#ecf0f1";
        body.style.backgroundColor = "white";
        button.style.backgroundColor = "";
        text.style.color = "white";
        container_parent.style.backgroundColor = "white";
        branding.style.color = "white";
        init == 1;
    }
}


/************************************************************************************************************************/
/**********************************************   DARK MOD MOUAHAHAHA   *************************************************/
/************************************************************************************************************************/



function dark_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = "#252525";
        body.style.backgroundColor = "#252525";
        button.style.backgroundColor = "";
        text.style.backgroundColor = "white";
        container_parent.style.backgroundColor = "#252525";
        branding.style.color = "white";

        init == 1;
    }
}

/************************************************************************************************************************/
/**************************************************   UNICORN MOD   *****************************************************/
/************************************************************************************************************************/

function default_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = ""
        body.style.backgroundColor = "";
        button.style.backgroundColor = "";
        text.style.backgroundColor = "";
        container_parent.style.backgroundColor = "";
        branding.style.color = "white";
        init == 1;
    }
}
