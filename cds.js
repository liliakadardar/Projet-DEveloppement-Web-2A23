function verification()
{
	var checknom; var checkprenom; var checksexe; var checktaille; var checkpoids; var checkadresse; var checkmail; var checkdate; var checkmdp; var checkmdp2;
	var caracteres1='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	var caracteres2='123456789';
	var caracteres3='²&é"(-è_çà)=*-+/~#{[|`\^@]}^$ù!:;,¨£µ%§.?';
	var a = document.getElementById("nom");
	var caracteres='&é~#"([{|-è`\_^ç@à)]}=123456789*+.,;:!§/.?$ù%¨£²';
	if (a.value.length<=2 || caracteres.indexOf(a.value)!=-1) {
		a.style.border="3px solid red";
		erreur_nom.innerText = "Nom incorrect!!";
		checknom=false;

	}else{
		a.style.border="1px solid green";
		erreur_nom.setAttribute("style", "color:green");
		erreur_nom.innerText = "Nom correct!";
		checknom=true;
	}
	var b = document.getElementById("prenom");
	if (b.value.length<=2 || caracteres.indexOf(b.value)!=-1) {
		b.style.border="3px solid red";
		erreur_prenom.innerText = "Prenom incorrect!!";
		checkprenom=false;

	}else{
		b.style.border="1px solid green";
		erreur_prenom.setAttribute("style", "color:green");
		erreur_prenom.innerText = "Prenom correct!";
		checkprenom=true;
	}
	var sexe=document.getElementById("sexe");
	if(sexe.value=='Homme' || sexe.value=='Femme')
	{
		sexe.style.border="1px solid green";
		erreur_sexe.setAttribute("style", "color:green");
		erreur_sexe.innerText = "Sexe selectionner!";
		checksexe=true
	}
	else
	{
		sexe.style.border="3px solid red";
		erreur_sexe.innerText = "Veuillez choisir le sexe!!";
		checksexe=false;
	}
	var c = document.getElementById("taille");
	if (c.value<120 || c.value>290) {
		c.style.border="3px solid red";
		erreur_taille.innerText = "Taille incorrect!!";
		checktaille=false;
	}else{
		c.style.border="1px solid green";
		erreur_taille.setAttribute("style", "color:green");
		erreur_taille.innerText = "Taille correct!";
		checktaille=true;
	}
	var d = document.getElementById("poids");
	if (d.value<30|| d.value>500) {
		d.style.border="3px solid red";
		erreur_poids.innerText = "Poids incorrect!!";
		checkpoids=false;
	}else{
		d.style.border="1px solid green";
		erreur_poids.setAttribute("style", "color:green");
		erreur_poids.innerText = "Poids correct!";
		checkpoids=true;
	}
	var e = document.getElementById("adresse");
	if (e.value.length<=2) {
		e.style.border="3px solid red";
		erreur_adresse.innerText = "Adresse incorrect!!";
		checkadresse=false;

	}else{
		e.style.border="1px solid green";
		erreur_adresse.setAttribute("style", "color:green");
		erreur_adresse.innerText = "Adresse correct!";
		checkadresse=true;
	}
	var f=document.getElementById('email');
	var ver1=f.value.indexOf("@");
	var ver2=f.value.indexOf(".com");
	if (f.value.length<=3 || ver1==-1 || ver2==-1) {
		e.style.border="3px solid red";
		erreur_mail.innerText = "Email incorrect!!";
		checkmail=false;

	}else{
		f.style.border="1px solid green";
		erreur_mail.setAttribute("style", "color:green");
		erreur_mail.innerText = "Email correct!";
		checkmail=true;
	}
	var g=document.getElementById("date_naissance");
	var spt=g.value.split('-');
	if(spt[0]>2008)
	{
		g.style.border="3px solid red";
		erreur_date.innerText = "Date incorrect!!";
		checkdate=false;
	}else{
		g.style.border="1px solid green";
		erreur_date.setAttribute("style", "color:green");
		erreur_date.innerText = "Date correct!";
		checkdate=true;
	}
	var h = document.getElementById("mdp");
	if (h.value.length>=8)
	{	h.style.border="1px solid green";
		erreur_mdp.setAttribute("style", "color:green");
		erreur_mdp.innerText = "Mot de passe correct!";
		checkmdp=true;

	}else{
		h.style.border="3px solid red";
		erreur_mdp.innerText = "Mot de passe incorrect!!";
		checkmdp=false;
	}
	var i=document.getElementById("mdp2");
	if(i.value==h.value)
	{
		i.style.border="1px solid green";
		erreur_mdp2.setAttribute("style", "color:green");
		erreur_mdp2.innerText = "Les mots de passe sont identiques!";
		checkmdp2=true;
	}
	else
	{
		i.style.border="3px solid red";
		erreur_mdp2.innerText = "Les mots de passe ne sont pas identiques!!";
		checkmdp2=false;
	}
	if(checknom==true&&checkprenom==true&&checksexe==true&&checktaille==true&&checkpoids==true&&checkadresse==true&&checkmail==true&&checkdate==true&&checkmdp==true&&checkmdp2==true)
	{
		alert("VOTRE FORMULAIRE EST BIEN ENVOYE");
		formulaire.submit();
	}
	else
	{
		alert("VEUILLEZ REMPLIR CORRECTEMENT LE FORMULAIRE");
		formulaire.reset();

	}



	//alert(a);
}