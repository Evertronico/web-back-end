package exercicio3;
public class Produto{
    private String nome;
    private double preco;
    private int quantidade;
    
    public Produto(String nome, double preco, int quantidade){
        this.nome = nome;
        setPreco(preco);
        setQuantidade(quantidade);
        }
    public String getNome() { return nome;}
    public String setNome(String nome) {this.nome = nome;}
    
    public double getPreco() {return preco; }
    public double setPreco(double preco) {
        if (preco >= 0) {
            this.preco = preco;
        } else {
            System.out.println("Você paga pra levar embora?");
        }
    public double getQuantidade() {return quantidade;}
    public double setQuantidade(int quantidade) {
        if (quantidade >= 0) {
            this.quantidade = quantidade;
        } else {
            System.out.println("VocÊ não pode tirar de onde não tem nada!");
        }
    }
    public static void main(String[] args) {
        Produto p1 = new Produto("Camisa do Santos", 290, 12);
        p1.setPreco(-50);
        p1.setQuantidade(-8);
    }
}