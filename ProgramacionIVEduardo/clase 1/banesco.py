# Definición de la clase cuentabancaria_GA
class cuentabancaria_GA:
    # Método constructor: se ejecuta al crear una instancia de la clase
    def __init__(self, titular, numero_cuenta, saldo):
        # Se inicializan los atributos de la cuenta bancaria con los valores proporcionados
        self.titular = titular  # Nombre del titular de la cuenta
        self.cuenta = numero_cuenta  # Número de cuenta
        self.saldo = saldo  # Saldo inicial de la cuenta

    # Método para ingresar dinero en la cuenta
    def ingresar(self):
        self.saldo = self.saldo + 1  # Aumenta el saldo en 1
        print(self.titular, "ingresa el monto", self.saldo)  # Imprime el nuevo saldo después del ingreso

    # Método para retirar dinero de la cuenta
    def retirar(self):
        self.saldo = self.saldo - 1  # Disminuye el saldo en 1
        print(self.titular, "retira el dinero", self.saldo)  # Imprime el nuevo saldo después del retiro

    # Método para consultar el saldo actual de la cuenta
    def consultar_saldo(self):
        print("La cuenta", self.cuenta, "posee", self.saldo, "bolívares fuertes")  # Muestra el saldo actual

# Creación de una instancia de la clase cuentabancaria_GA
# Se crea un objeto llamado 'banesco' con un titular, número de cuenta y saldo inicial
banesco = cuentabancaria_GA("Paco", 696969, 502)

# Se imprime el nombre del titular de la cuenta accediendo al atributo 'titular' del objeto 'banesco'
print(banesco.titular)

# Se llama al método 'ingresar' para aumentar el saldo en 1 y mostrar el nuevo saldo
banesco.ingresar()

# Se puede descomentar esta línea para retirar dinero de la cuenta (actualmente está comentada)
# banesco.retirar()

# Se llama al método 'consultar_saldo' para mostrar el saldo actual de la cuenta
banesco.consultar_saldo()
