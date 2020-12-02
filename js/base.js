let tituloHeader = {
    "inicio": "Bienvenido a Mendez Solutions",
    "nosotros": "Conócenos",
    "contactos": "¡Querémos escucharte!",
    "blog": "Sabías que...",
    "catalogo": "OFERTAS TODOS LOS DÍAS!!!",
    "subscribirse": "Quieres mantenerte siempre al día?"
}

//poner en estado activo en nav y footer 
let pageName = document.querySelector("head > title").innerHTML.toLowerCase();
if (pageName != "subscribirse"){
    document.querySelector("#nav-li-" + pageName + "> a").style = "color:#DF5A4F";
}

document.getElementById("header-text").innerText = tituloHeader[pageName];