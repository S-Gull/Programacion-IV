# Definición de la clase coches_GA
class coches_GA:
    # Método constructor: se ejecuta al crear una instancia de la clase
    def __init__(self, marca, modelo, año, color):
        # Se inicializan los atributos del coche con los valores proporcionados
        self.marca = marca  # Marca del coche
        self.modelo = modelo  # Modelo del coche
        self.año = año  # Año de fabricación del coche
        self.color = color  # Color del coche

    # Método para arrancar el coche
    def arrancar(self):
        print(self.modelo, "arranca")  # Imprime un mensaje indicando que el coche arranca

    # Método para frenar el coche
    def frenar(self):
        print(self.modelo, "frena")  # Imprime un mensaje indicando que el coche frena

    # Método para acelerar el coche
    def acelerar(self):
        print(self.modelo, "acelera")  # Imprime un mensaje indicando que el coche acelera

# Creación de una instancia de la clase coches_GA
# Se crea un objeto llamado 'supra' con una marca, modelo, año y color específicos
supra = coches_GA("toyota", "supra mk5", 2019, "rojo")

# Se imprime la marca del coche accediendo al atributo 'marca' del objeto 'supra'
print(supra.marca)

# Se llama al método 'arrancar' para que el coche arranque
supra.arrancar()

# Se llama al método 'frenar' para que el coche frene
supra.frenar()

# Se llama al método 'acelerar' para que el coche acelere
supra.acelerar()
