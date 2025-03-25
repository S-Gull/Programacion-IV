class Cuenta_bancaria ():
        def __init__(self,saldo_inicial):
                self._saldo = self._saldo_inicial

        def ingresar(self, cuenta, cantidad):
            
            if (cuenta > 0) and (cantidad >0):
                print("el usuario quiere ingresar ", cantidad)
                self._saldo += cantidad
                print(self._saldo)





cuenta_go = Cuenta_bancaria(12)
print = (cuenta_go.ingresar(2,12))