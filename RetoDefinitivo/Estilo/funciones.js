function HoraActual(hora, minuto, segundo){
		segundo++;
		if(segundo == 60) {
			minuto++;
			segundo = 0;
			if(minuto == 60) {
				minuto = 0;
				hora++;
				if(hora == 24) {
					hora = 0;
				}
			}
		}
        //enviamos los datos a un id en concreto.
		HoraCompleta= hora + "  :  " + minuto + "  :  " + segundo;
		document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
		setTimeout("HoraActual("+hora+", "+minuto+", "+segundo+")", 1000);
} 