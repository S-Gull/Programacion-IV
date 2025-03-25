class Carro(): #clase 
    def __init__(self):    
        self._largo_chasis = 250      #propiedad
        self._ancho_chasis = 150  #propiedad
        self._ruedas = 4  #propiedad
        self._en_marcha = False   #propiedad
        self.gasolina = True;
        self.aceite = True;
        self.puertas_delanteras = True;
        self.puertas_traseras = True;
        self.maletera = True;
        self.capo = True;



    def arrancar(self): #metodo
    

        if (self._en_marcha):
            return "el Carro esta en marcha" 
        else:
            return "el Carro no esta en marcha" 
    def estado(self):#metodo
        print('el carro tiene', self._ruedas, 'ruedas y tiene un ancho de', self._ancho_chasis )
    
    def chequeo(self): #metodo
        if self.aceite:
            print('El carro no tiene trigo')
            if (self.puertas_delanteras) and (self.puertas_traseras) and (self.capo) and (self.maletera):
                print('Las puertas estan cerradas')
                if self.gasolina:
                    print('a ella le gusta la gasolinaa')
                    self._en_marcha = True
                    return True

                else:
                    print("no hay gasoil")
                    return False
            else:    
                print('Las puertas estan abiertas')

        else:
            print('El carro no tiene Mavesa')
            

Mi_carro = Carro() #instancia
print(Mi_carro.arrancar())
print(Mi_carro.chequeo())
print(Mi_carro.arrancar())