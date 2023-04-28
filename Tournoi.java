/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package athlete.entities;

import java.time.LocalDate;
import java.util.Date;


/**
 *
 * @author Acer
 */
public class Tournoi {
   
    private int id;
    private String titre;
    private LocalDate dateTournoi;
    private Athlete athlete;

    public Tournoi() {
    }

    public Tournoi(String titre, LocalDate dateTournoi) {
        this.titre = titre;
        this.dateTournoi = dateTournoi;
    }

    public Tournoi(int id, String titre, LocalDate dateTournoi) {
        this.id = id;
        this.titre = titre;
        this.dateTournoi = dateTournoi;
    }

    public Tournoi(String titre, Date date) {
        this.titre=titre ;
        this.dateTournoi=dateTournoi ;
    }

   

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public LocalDate getDateTournoi() {
        return dateTournoi;
    }

    public void setDateTournoi(LocalDate dateTournoi) {
        this.dateTournoi = dateTournoi;
    }

    public Tournoi(String titre) {
        this.titre = titre;
    }

    public Tournoi(int id, String titre) {
        this.id = id;
        this.titre = titre;
    }

    public Athlete getAthlete() {
        return athlete;
    }

    public void setAthlete(Athlete athlete) {
        this.athlete = athlete;
    }
    

    @Override
    public String toString() {
        return "Tournoi{" + "titre=" + titre + ", dateTournoi=" + dateTournoi + '}';
    }
    
    
    
}
