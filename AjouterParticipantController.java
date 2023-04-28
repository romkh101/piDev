/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package guii;

import entity.Participants;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.SQLException;
import java.util.Date;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.stage.Window;
import service.ParticipantService;

/**
 * FXML Controller class
 *
 * @author asus
 */
public class AjouterParticipantController implements Initializable {

   ParticipantService bs = new ParticipantService();
    @FXML
    private TextField nom;
    @FXML
    private TextField prenom;
    @FXML
    private ImageView imv;
    @FXML
    private TextField nom_event;
    @FXML
    private TextField cin;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
           
    }    


        
 

    @FXML
    private void Ajouter(ActionEvent event) throws SQLException {
        
        
        if (nom.getText().equals("") || prenom.getText().equals("")|| cin.getText().equals("")|| nom_event.getText().equals("")){
       
            Alert alert = new Alert(Alert.AlertType.ERROR, "vérifier votre champs", ButtonType.OK);
           alert.showAndWait();
        
       
       }
       else{
         //copier(pfile, pDir);


       Participants e = new Participants();
       e.setNomPart(nom.getText());
       e.setPrenomPart(prenom.getText());
              e.setCin(cin.getText());
                            e.setNom_event(nom_event.getText());
       bs.addParticipants(e);

       
       
       
       Parent root;
        try {
          root = FXMLLoader.load(getClass().getResource("/guii/ListParticipant.fxml"));
          Stage myWindow = (Stage) nom.getScene().getWindow();
          Scene sc = new Scene(root);
          myWindow.setScene(sc);
          myWindow.setTitle("page name");
                            //myWindow.setFullScreen(true);
          myWindow.show();
          } catch (IOException ex) {
          Logger.getLogger(AjouterParticipantController.class.getName()).log(Level.SEVERE, null, ex);
           }
       }
    }


}

