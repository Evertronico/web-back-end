package exercicio2;
public class Produto {
    String nome;
    double preco;
    int quantidade;
    
    public Produto(String nome, double preco, int quantidade){
        this.nome = nome;
        this.preco = preco;
        this.quantidade = quantidade;
    }
    public void adicionarEstoque(int valor) {
        this.quantidade += valor;
    }
    public void removerEstoque(int valor){
        if (valor <= this.quantidade) {
            this.quantidade -= valor;
        } else {
            System.out.println("Não há mais nada no estoque!");
        }
    }
    public double calcularvalorEstoque() {
        return preco * quantidade;
    }
    public void exibirDados() {
        System.out.println("Nome: " + nome + " | Preço: " + preco + " |Estoque: " + quantidade);
        System.out.println("=====================");
        System.out.println("O valor em estoque deste produto é R$: " + calcularvalorEstoque());
    }
    public static void main (String[]args) {
        Produto p1 = new Produto("Cadeira", 129.90, 14);
        Produto p2 = new Produto("Mesa", 399.90, 15);
        
        p1.exibirDados();
        p1.adicionarEstoque(5);
        p1.removerEstoque(20); //Uma a mais para testar a falha
        
        p2.exibirDados();
        p2.adicionarEstoque(8);
        p2.removerEstoque(25); //teste de falha
    }
}