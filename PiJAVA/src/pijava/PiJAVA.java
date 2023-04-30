/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pijava;

import Entities.Actualite;
import Entities.Categorie;
import MyConnection.MyConnection;
import Services.ActualiteCRUD;
import Services.CategorieCRUD;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

/**
 *
 * @author Aziz
 */
public class PiJAVA {

    /**
     * @param args the command line arguments
     * @throws java.text.ParseException
     */
    public static void main(String[] args) throws ParseException {
          MyConnection cnx = new MyConnection();
          ActualiteCRUD pcd = new ActualiteCRUD();
          CategorieCRUD cat = new CategorieCRUD();
  
    // Créer un objet Actualite
SimpleDateFormat dateFormat = new SimpleDateFormat("dd-MM-yyyy");
Date date = dateFormat.parse("10-10-2022");
Categorie cato= new Categorie("basketball");    
Actualite a = new Actualite("Titre", "Image", "Contenu", "Auteur", new java.sql.Date(date.getTime()),cato);
Categorie c = new Categorie("tennis");
    //pcd.ajouterActualite(a);
    //System.out.println(pcd.listerActualitesParCategorie(c));
      //  pcd.modifierActualite(a,"azizzalila", "Image", "Contenu", "Auteur", new java.sql.Date(date.getTime()),cato);
     //pcd.supprimerActualite(a);
      // pcd.listerrActualite();
      cat.ajouterCategorie(c); 
      //cat.modifierCategorie(c,"Basketball"); 
      //System.out.println(pcd.listerActualite()); 
      //System.out.println(cat.listerCategorie()); 
    }
    
}
