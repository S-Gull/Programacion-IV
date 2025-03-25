# Definición de la clase libro_GA
class libro_GA:
    # Método constructor: se ejecuta al crear una instancia de la clase
    def __init__(self, titulo, autor, numero_paginas):
        # Se inicializan los atributos del libro con los valores proporcionados
        self.titulo = titulo  # Título del libro
        self.autor = autor  # Autor del libro
        self.numero_paginas = numero_paginas  # Número de páginas del libro

    # Método leer: imprime información sobre el libro
    def leer(self):
        # Mensaje que incluye los atributos del libro
        print(
            "Mi libro", self.titulo, 
            "escrito por:", self.autor, 
            "con", self.numero_paginas, 
            "paginas, YA ESTA SIENDO UN EXITO EN TODOS LOS PAISES DE HABLA HISPANA"
        )

# Creación de una instancia de la clase libro_GA
# Se crea un objeto llamado 'libro' con un título, autor y número de páginas
libro = libro_GA("Luna De Pluton", "Dross Rotzank", 472)

# Se imprime el título del libro accediendo al atributo 'titulo' del objeto 'libro'
print(libro.titulo)

# Se llama al método 'leer' del objeto 'libro', que imprime un mensaje sobre el libro
libro.leer()