init = 0

default_mods_button = document.getElementById("default_mods_button");
dark_mods_button = document.getElementById("dark_mods_button");
unicorn_mods_button = document.getElementById("unicorn_mods_button");

navbar = document.getElementById("navbar");
footer = document.getElementById("footer");
body = document.getElementById("body");
button = document.getElementById("button");
text = document.getElementById("text");
container_parent = document.getElementById("container_parent");
branding = document.getElementById("branding");

/************************************************************************************************************************/
/*************************************************   DEFAULT MODS   *****************************************************/
/************************************************************************************************************************/

function default_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = "#ecf0f1";
        footer.style.backgroundColor = "#ecf0f1";
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
        footer.style.backgroundColor = "";
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

function unicorn_mods() 
{
    if (init == 0) 
    {
        navbar.style.backgroundColor = ""
        footer.style.backgroundColor = "";
        body.style.backgroundColor = "";
        button.style.backgroundColor = "";
        text.style.backgroundColor = "";
        container_parent.style.backgroundColor = "";
        branding.style.color = "white";
        init == 1;
    }
}
