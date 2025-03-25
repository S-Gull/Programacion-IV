# Definición de la clase personas_GA
class personas_GA:
    # Método constructor: se ejecuta al crear una instancia de la clase
    def __init__(self, nombre, edad, altura):
        # Se inicializan los atributos de la persona con los valores proporcionados
        self.nombre = nombre  # Nombre de la persona
        self.edad = edad      # Edad de la persona
        self.altura = altura  # Altura de la persona en metros

    # Método para saludar
    def saludar(self):
        print(self.nombre, "saluda")  # Imprime un mensaje de saludo con el nombre de la persona

    # Método para simular que la persona camina
    def caminar(self):
        print(self.nombre, "camina")  # Imprime un mensaje indicando que la persona está caminando

    # Método para simular que la persona duerme
    def dormir(self):
        print(self.nombre, "se mimió")  # Imprime un mensaje indicando que la persona está durmiendo

# Creación de una instancia de la clase personas_GA
# Se crea un objeto llamado 'persona' con un nombre, edad y altura específicos
persona = personas_GA("Paco", 69, 1.72)

# Se imprime el nombre de la persona accediendo al atributo 'nombre' del objeto 'persona'
print(persona.nombre)

# Se llama al método 'saludar' para que la persona salude
persona.saludar()

# Se llama al método 'caminar' para que la persona simule que camina
persona.caminar()

# Se llama al método 'dormir' para que la persona simule que duerme
persona.dormir()
