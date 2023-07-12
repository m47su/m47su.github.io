import requests
from bs4 import BeautifulSoup
import random

def gerar_poema(palavra):
    url = f"https://www.pensador.com/amor/{palavra}"
    response = requests.get(url)
    soup = BeautifulSoup(response.content, "html.parser")
    poemas = soup.find_all("p", class_="frase fr")
    
    if poemas:
        poema_selecionado = random.choice(poemas).text
        return poema_selecionado
    else:
        return "Não foi possível encontrar um poema com a palavra-chave fornecida."

# Exemplo de uso
palavra = "amor"
poema = gerar_poema(palavra)
print(poema)
