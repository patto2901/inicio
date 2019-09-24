using System;
public class promedio
{
	private List<double> notas = null;

	public promedio()
	{
		notas = new List<double>();
	}
	
	public void insertar(double nota)
	{
		notas.Add(nota);
	}
	
	public double promedios()
	{
		double suma = 0;
		foreach (double nota in notas)
		{
			suma += nota;
		}
		
		double prom = suma / notas.Count;
		
		return prom;

	}
}