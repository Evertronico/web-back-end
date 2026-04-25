package exercicio1;
public class Produto {
    String nome;
    double preco; 
    int quantidade; 
    
    public double calcularValorestoque(){
        return preco * quantidade;
    }
    public void exibirDados(){
        System.out.println("Nome: " + nome + "| Preço: R$: " + preco + "| Estoque: " + quantidade);
        System.out.println("Temos R$ " + calcularValorestoque() + " em " + nome);
    }
    
    public static void main(String[] args) {
    Produto p1 = new Produto();
    p1.nome = "Teclado";
    p1.preco = 150.00;
    p1.quantidade = 12;
    
    Produto p2 = new Produto();
    p2.nome = "Mouse";
    p2.preco = 79.90;
    p2.quantidade = 48;
    
    p1.exibirDados();
    System.out.println("======================");
    p2.exibirDados();
    }
}