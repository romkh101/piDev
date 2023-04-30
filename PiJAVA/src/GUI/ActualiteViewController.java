/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Actualite;
import javafx.print.PrinterJob;
import java.awt.print.PrinterException;
import java.io.File;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;



/**
 * FXML Controller class
 *
 * @author Aziz
 */

public class ActualiteViewController implements Initializable {

    @FXML
    private WebView webView;
    private WebEngine webEngine;
    @FXML
    private Button imprimer;

    /**
     * Initializes the controller class.
     */
     public void setActualite(Actualite actualite) {
        webEngine = webView.getEngine();

      String imagePath = "src/images/" + actualite.getImage();
File file = new File(imagePath);
String imageUri = file.toURI().toString();

String htmlContent = "<h1>" + actualite.getTitre() + "</h1>"
                   + "<li>" + actualite.getContenu() + "</li>"
                   + "Categorie: " + actualite.getCategorie().getNom() 
                   + "<li>" + "Auteur: " + actualite.getAuteur() + "</li>"
                   + actualite.getDate()
                   + "<br><img src=\"" + imageUri + "\">";

webEngine.loadContent(htmlContent);
     }
     
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
    }    

    @FXML
private void handleImprimer(ActionEvent event) throws PrinterException {
 PrinterJob printerJob = PrinterJob.createPrinterJob();
    if (printerJob != null && printerJob.showPrintDialog(webView.getScene().getWindow())) {
        webView.getEngine().print(printerJob);
        printerJob.endJob();
}
}
}
