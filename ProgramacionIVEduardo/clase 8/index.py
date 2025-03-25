import time
from datetime import datetime as dt

host_temp = "hosts"  # Archivo temporal de hosts
# host_path = "/etc/hosts"  # Ruta real del archivo hosts en sistemas Unix
redirect = "127.0.0.1"
website_list = ["www.facebook.com", "facebook.com", "mlb.com", "xnxx.com"]

while True:
    # Verifica si es horario de trabajo (entre las 8:00 y las 18:00)
    if dt(dt.now().year, dt.now().month, dt.now().day, 8) < dt.now() < dt(dt.now().year, dt.now().month, dt.now().day, 18):
        print(dt.now().hour,dt.now().min,"Hora de trabajo 🥶")
        with open(host_temp, "r+") as file:
            content = file.read()
            for website in website_list:
                if website not in content:
                    file.write(redirect + " " + website + "\n")  # Bloquea el sitio web
    else:
        print("Hora de diversión 🥵")
        with open(host_temp, "r+") as file:
            lines = file.readlines()
            file.seek(0)  # Vuelve al inicio del archivo
            for line in lines:
                if not any(website in line for website in website_list):
                    file.write(line)  # Escribe solo las líneas que no bloquean sitios web
            file.truncate()  # Elimina el resto del archivo

    time.sleep(1)  # Espera 5 segundos antes de repetir