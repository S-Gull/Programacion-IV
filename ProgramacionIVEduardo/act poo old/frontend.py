from tkinter import *
from backend import Database

# Conexión a la base de datos
database = Database("books.db")

# Definición de una paleta de colores y fuentes para mantener consistencia
ESTILOS = {
    "fondo": "#333333",  # Color de fondo oscuro
    "texto": "#FFFFFF",  # Color de texto blanco
    "entrada_fondo": "#696969",  # Fondo Gris para campos de entrada
    "entrada_texto": "#000000",  # Texto negro para campos de entrada
    "boton_fondo": "#4CAF50",  # Fondo verde para botones
    "boton_activo": "#45a049",  # Fondo verde oscuro para efecto hover
    "lista_fondo": "#696969",  # Fondo Gris para la lista
    "lista_texto": "#000000",  # Texto negro para la lista
    "fuente": ("Arial", 10),  # Fuente estándar
    "fuente_titulos": ("Arial", 10, "bold")  # Fuente en negrita para títulos
}

class Window(object):
    def __init__(self, window):
        self.window = window
        self.window.wm_title("Tienda de Libros")
        
        # Configuración del color de fondo de la ventana principal
        self.window.configure(bg=ESTILOS["fondo"])
        
        # Configuración del grid principal para que sea responsivo
        self.window.columnconfigure((0, 1, 2, 3), weight=1, minsize=100)
        
        # Etiquetas con estilo moderno
        l1 = Label(window, text="Título", bg=ESTILOS["fondo"], fg=ESTILOS["texto"], 
                 font=ESTILOS["fuente_titulos"], padx=5, pady=5)
        l1.grid(row=0, column=0, sticky="w")  # Alineación a la izquierda
        
        l2 = Label(window, text="Autor", bg=ESTILOS["fondo"], fg=ESTILOS["texto"], 
                 font=ESTILOS["fuente_titulos"], padx=5, pady=5)
        l2.grid(row=0, column=2, sticky="w")
        
        l3 = Label(window, text="Año", bg=ESTILOS["fondo"], fg=ESTILOS["texto"], 
                 font=ESTILOS["fuente_titulos"], padx=5, pady=5)
        l3.grid(row=1, column=0, sticky="w")
        
        l4 = Label(window, text="ISBN", bg=ESTILOS["fondo"], fg=ESTILOS["texto"], 
                 font=ESTILOS["fuente_titulos"], padx=5, pady=5)
        l4.grid(row=1, column=2, sticky="w")
        
        # Campos de entrada con estilo moderno
        self.title_text = StringVar()
        self.e1 = Entry(window, textvariable=self.title_text, 
                      bg=ESTILOS["entrada_fondo"], fg=ESTILOS["entrada_texto"], 
                      font=ESTILOS["fuente"], relief="flat")  # Bordes planos
        self.e1.grid(row=0, column=1, sticky="ew", padx=5, pady=5)  # Expandir horizontalmente
        
        self.author_text = StringVar()
        self.e2 = Entry(window, textvariable=self.author_text, 
                      bg=ESTILOS["entrada_fondo"], fg=ESTILOS["entrada_texto"], 
                      font=ESTILOS["fuente"], relief="flat")
        self.e2.grid(row=0, column=3, sticky="ew", padx=5, pady=5)
        
        self.year_text = StringVar()
        self.e3 = Entry(window, textvariable=self.year_text, 
                      bg=ESTILOS["entrada_fondo"], fg=ESTILOS["entrada_texto"], 
                      font=ESTILOS["fuente"], relief="flat")
        self.e3.grid(row=1, column=1, sticky="ew", padx=5, pady=5)
        
        self.isbn_text = StringVar()
        self.e4 = Entry(window, textvariable=self.isbn_text, 
                      bg=ESTILOS["entrada_fondo"], fg=ESTILOS["entrada_texto"], 
                      font=ESTILOS["fuente"], relief="flat")
        self.e4.grid(row=1, column=3, sticky="ew", padx=5, pady=5)
        
        # Lista y Scrollbar con estilo moderno
        self.list1 = Listbox(window, height=6, width=35, 
                           bg=ESTILOS["lista_fondo"], fg=ESTILOS["lista_texto"], 
                           font=ESTILOS["fuente"], relief="flat")
        self.list1.grid(row=2, column=0, rowspan=6, columnspan=2, 
                      padx=5, pady=5, sticky="nsew")  # Expandir en todas las direcciones
        
        sb1 = Scrollbar(window, orient="vertical", 
                      bg=ESTILOS["fondo"], troughcolor=ESTILOS["fondo"], 
                      activebackground=ESTILOS["boton_activo"])  # Scrollbar integrada
        sb1.grid(row=2, column=2, rowspan=6, sticky="ns")
        
        self.list1.configure(yscrollcommand=sb1.set)
        sb1.configure(command=self.list1.yview)
        self.list1.bind('<<ListboxSelect>>', self.get_selected_row)
        
        # Estilo común para todos los botones
        boton_estilo = {
            "bg": ESTILOS["boton_fondo"],  # Fondo verde
            "fg": ESTILOS["texto"],  # Texto blanco
            "activebackground": ESTILOS["boton_activo"],  # Efecto hover
            "font": ESTILOS["fuente_titulos"],  # Fuente en negrita
            "relief": "groove",  # Bordes planos
            "padx": 5,  # Espaciado horizontal
            "pady": 2  # Espaciado vertical
        }
        
        # Botones con estilo moderno
        b1 = Button(window, text="Ver Todo", **boton_estilo, command=self.view_command)
        b1.grid(row=2, column=3, sticky="ew", padx=2, pady=1)  # Expandir horizontalmente
        
        b2 = Button(window, text="Buscar Registro", **boton_estilo, command=self.search_command)
        b2.grid(row=3, column=3, sticky="ew", padx=2, pady=1)
        
        b3 = Button(window, text="Añadir Registro", **boton_estilo, command=self.add_command)
        b3.grid(row=4, column=3, sticky="ew", padx=2, pady=1)
        
        b4 = Button(window, text="Actualizar Selección", **boton_estilo, command=self.update_command)
        b4.grid(row=5, column=3, sticky="ew", padx=2, pady=1)
        
        b5 = Button(window, text="Borrar Registro", **boton_estilo, command=self.delete_command)
        b5.grid(row=6, column=3, sticky="ew", padx=2, pady=1)
        
        b6 = Button(window, text="Finalizar", **boton_estilo, command=window.destroy)
        b6.grid(row=7, column=3, sticky="ew", padx=2, pady=1)

    # Métodos sin cambios
    def get_selected_row(self, event):
        index = self.list1.curselection()[0]
        self.selected_tuple = self.list1.get(index)
        self.e1.delete(0, END)
        self.e1.insert(END, self.selected_tuple[1])
        self.e2.delete(0, END)
        self.e2.insert(END, self.selected_tuple[2])
        self.e3.delete(0, END)
        self.e3.insert(END, self.selected_tuple[3])
        self.e4.delete(0, END)
        self.e4.insert(END, self.selected_tuple[4])

    def view_command(self):
        self.list1.delete(0, END)
        for row in database.view():
            self.list1.insert(END, row)

    def search_command(self):
        self.list1.delete(0, END)
        for row in database.search(self.title_text.get(), self.author_text.get(), self.year_text.get(), self.isbn_text.get()):
            self.list1.insert(END, row)

    def add_command(self):
        database.insert(self.title_text.get(), self.author_text.get(), self.year_text.get(), self.isbn_text.get())
        self.list1.delete(0, END)
        self.list1.insert(END, (self.title_text.get(), self.author_text.get(), self.year_text.get(), self.isbn_text.get()))

    def delete_command(self):
        database.delete(self.selected_tuple[0])

    def update_command(self):
        database.update(self.selected_tuple[0], self.title_text.get(), self.author_text.get(), self.year_text.get(), self.isbn_text.get())

# Inicialización de la ventana principal
window = Tk()
Window(window)
window.mainloop()