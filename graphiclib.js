class LibGraph {
    // penser à mettre un constructeur
    
    initcanevas (canevas, L=-1, H=-1) {
        var lecadre = document.getElementById (canevas);
        if (L==-1) L=window.innerWidth;
        if (H==-1) H=window.innerHeight;
        this.largeur = lecadre.width = L;
        this.hauteur = lecadre.height = H;
        this.ctx = lecadre.getContext('2d'); 
    }
    ligne (xo, yo, xd, yd) {
        this.ctx.beginPath();
        this.ctx.moveTo(xo, yo);
        this.ctx.lineTo(xo+xd, yo+yd);
        this.ctx.stroke();
    }
    ligneABS (xo, yo, xd, yd) {
        this.ctx.beginPath();
        this.ctx.moveTo(xo, yo);
        this.ctx.lineTo(xd, yd);
        this.ctx.stroke();
    }
    cercle (x, y, r, plein=false, degO=0, degD=360) {
        this.ctx.beginPath();
        this.ctx.arc(x, y, r, degO*Math.PI/180, degD*Math.PI/180, false);
        this.ctx.stroke();
        if (plein) this.ctx.fill();
    }
    // x,y: coin supérieur gauche---- w,h: largeur, hauteur---- plein=true, rempli---- plein=false, cadre seul.
    rectangle (x, y, w, h, plein=false) {
        if (plein) { this.ctx.fillRect (x, y, w, h) }
        else { this.ctx.strokeRect (x, y, w, h) }
    }
    styleTrait (épaisseur=1, couleur='black') {
        this.ctx.lineWidth = épaisseur;
        this.ctx.strokeStyle = (couleur);
    }
    rempli (couleur) {
        this.ctx.fillStyle= couleur;
    }
    texte (texte, x, y, taillePol="10px", police="arial") {
        this.ctx.font = taillePol + " " + police;
        this.ctx.fillText (texte, x, y);
    }
}

