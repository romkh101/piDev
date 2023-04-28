/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package guii;

import entity.Evenement;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLDataException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;

import javafx.scene.control.Button;
import javafx.scene.control.ListView;
import javafx.stage.Stage;
import service.EvenementService;


/**
 * FXML Controller class
 *
 * @author dell
 */
public class ShowEvenementController implements Initializable {

    @FXML
    private ListView<Evenement> listView;
   
    ObservableList<Evenement> data;
    
    public static int idE ;
    
    EvenementService ds = new EvenementService();

   

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        try {
            EvenementService cs = new EvenementService();
            data = (ObservableList<Evenement>) cs.getAllEvenement();   
            listView.setItems(data);
            listView.setCellFactory((ListView<Evenement> param) -> new ListViewEvenement());
            
            
            // TODO
        } catch (SQLDataException ex) {
            Logger.getLogger(ShowEvenementController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    




    @FXML
    private void handleClose(ActionEvent event) {
    }

    @FXML
    private void Commentaire(ActionEvent event) {
              ObservableList<Evenement> e;
            e = listView.getSelectionModel().getSelectedItems();
         for (Evenement m : e) 
          idE=m.getId();
        
         try {
            Parent root = FXMLLoader.load(getClass().getResource("/guii/ShowCommentClient.fxml"));
            Stage myWindow =  (Stage) listView.getScene().getWindow();
            Scene sc = new Scene(root);
            myWindow.setScene(sc);
            myWindow.setTitle("");
            myWindow.show();
           
        } catch (IOException ex) {
        }
    }




    }
