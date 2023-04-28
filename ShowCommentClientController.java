/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package guii;


import com.itextpdf.text.BadElementException;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfWriter;
import entity.Commentaire;
import entity.Evenement;
import entity.Participants;
import entity.Vote;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLDataException;
import java.sql.Date;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;

import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import org.controlsfx.control.Notifications;
import service.CommentaireService;
import service.EvenementService;
import service.ServiceVote;

/**
 * FXML Controller class
 *
 * @author dell
 */
public class ShowCommentClientController implements Initializable {

    @FXML
    private ListView<Commentaire> listView;
   
    ObservableList<Commentaire> data;
    
    
    EvenementService ds = new EvenementService();

    CommentaireService cs = new CommentaireService();
   
    @FXML
    private TextField contenu;
    @FXML
    private Label nbrLike;
    @FXML
    private Label nbrdeslike;
    
 

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
              ServiceVote v = new ServiceVote();
         int lik = 0;
        try {
            lik = v.NumLike(ShowEvenementController.idE);
        } catch (SQLException ex) {
            Logger.getLogger(ShowCommentClientController.class.getName()).log(Level.SEVERE, null, ex);
        }
         int des = 0;
        try {
            des = v.NumdeLike(ShowEvenementController.idE);
        } catch (SQLException ex) {
            Logger.getLogger(ShowCommentClientController.class.getName()).log(Level.SEVERE, null, ex);
        }
         nbrLike.setText(String.valueOf(des));
         nbrdeslike.setText(String.valueOf(lik));

        
 
        
        CommentaireService cs = new CommentaireService();
        try {
            data = (ObservableList<Commentaire>) cs.getAllCommentaire();
        } catch (SQLDataException ex) {
            Logger.getLogger(ShowCommentClientController.class.getName()).log(Level.SEVERE, null, ex);
        }
        listView.setItems(data);
        listView.setCellFactory((ListView<Commentaire> param) -> new ListViewCommentClient());

    }    


    @FXML
    private void commenter(ActionEvent event) throws SQLException {
         
        long millis=System.currentTimeMillis();  
        java.sql.Date d=new java.sql.Date(millis);  
        Commentaire c = new Commentaire();
        //BadWords.loadConfigs();
        
        
        c.setContenue(contenu.getText());
        cs.addCommentaire(c);
        
        
                          try {
            Parent root = FXMLLoader.load(getClass().getResource("/guii/ShowCommentClient.fxml"));
            Stage myWindow =  (Stage) contenu.getScene().getWindow();
            Scene sc = new Scene(root);
            myWindow.setScene(sc);
            myWindow.setTitle("");
            myWindow.show();
           
        } catch (IOException ex) {
        }
    
          
    }

    @FXML
    private void Delete(ActionEvent event) throws SQLDataException {
                      
            ObservableList<Commentaire> e = listView.getSelectionModel().getSelectedItems();

            
          for (Commentaire m : e) 
        
        cs.deleteCommentaire(m.getId());
         try {
            Parent root = FXMLLoader.load(getClass().getResource("/guii/ShowCommentClient.fxml"));
            Stage myWindow =  (Stage) contenu.getScene().getWindow();
            Scene sc = new Scene(root);
            myWindow.setScene(sc);
            myWindow.setTitle("");
            myWindow.show();
           
        } catch (IOException ex) {
        }
    }

    @FXML
    private void Like(ActionEvent event) throws SQLException {
        
       ServiceVote sv  = new ServiceVote();
        if (sv.user_vote(1,ShowEvenementController.idE)== null)
        {
            Vote v = new Vote ();
        v.setId_client(1);
        v.setType_vote(1);
        v.setId_evenement(ShowEvenementController.idE);
       sv.addVote(v);
        
         Notifications notificationBuilder = Notifications.create()
                .title("Done").text("votre vote est bien enregistrer").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
               .position(Pos.CENTER_LEFT)
               .onAction(new EventHandler<ActionEvent>(){
                   public void handle(ActionEvent event)
                   {
                       System.out.println("clicked ON ");
               }});
       notificationBuilder.darkStyle();
       notificationBuilder.show();
                       
           Parent root ;
        try {
          root = FXMLLoader.load(getClass().getResource("/guii/ShowCommentClient.fxml"));
            Stage myWindow =  (Stage) contenu.getScene().getWindow();
            Scene sc = new Scene(root);
            myWindow.setScene(sc);
            myWindow.setTitle("comment");
            myWindow.show();
           
        } catch (IOException ex) {
            Logger.getLogger(ShowCommentClientController.class.getName()).log(Level.SEVERE,null,ex);
           
        } 
        }
        else
        {
         Notifications notificationBuilder = Notifications.create()
                .title("Done").text("votre avez déja un vote").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
               .position(Pos.CENTER_LEFT)
               .onAction(new EventHandler<ActionEvent>(){
                   public void handle(ActionEvent event)
                   {
                       System.out.println("clicked ON ");
               }});
       notificationBuilder.darkStyle();
       notificationBuilder.show();        
        }
    }


    
    @FXML
    private void DesLike(ActionEvent event) throws SQLException {
        
        
        ServiceVote sv  = new ServiceVote();
  if (sv.user_vote(1,ShowEvenementController.idE)== null)
  {
       Vote v = new Vote ();
        v.setId_client(1);
        v.setType_vote(2);
        v.setId_evenement(ShowEvenementController.idE);
        sv.addVote(v);
        
         Notifications notificationBuilder = Notifications.create()
                .title("Done").text("votre vote est bien enregistrer").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
               .position(Pos.CENTER_LEFT)
               .onAction(new EventHandler<ActionEvent>(){
                   public void handle(ActionEvent event)
                   {
                       System.out.println("clicked ON ");
               }});
       notificationBuilder.darkStyle();
       notificationBuilder.show();
                       
           Parent root ;
        try {
          root = FXMLLoader.load(getClass().getResource("/guii/ShowCommentClient.fxml"));
            Stage myWindow =  (Stage) contenu.getScene().getWindow();
            Scene sc = new Scene(root);
            myWindow.setScene(sc);
            myWindow.setTitle("comment");
            myWindow.show();
           
        } catch (IOException ex) {
            Logger.getLogger(ShowCommentClientController.class.getName()).log(Level.SEVERE,null,ex);
           
        }
  }
  else
  {
          Notifications notificationBuilder = Notifications.create()
                .title("Done").text("votre vote est bien enregistrer").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
               .position(Pos.CENTER_LEFT)
               .onAction(new EventHandler<ActionEvent>(){
                   public void handle(ActionEvent event)
                   {
                       System.out.println("clicked ON ");
               }});
       notificationBuilder.darkStyle();
       notificationBuilder.show();
  }
       
        
        
    }
    @FXML
    private void pdf(ActionEvent event) throws FileNotFoundException, DocumentException, BadElementException, IOException {

        TelechargerPdf(ds.get_EvenementById(ShowEvenementController.idE));
        
    }
    
    
             
        void TelechargerPdf( Evenement py) throws FileNotFoundException, DocumentException, BadElementException, IOException{
        String file_name="C:\\C:\\Users\\asus\\Desktop\\pdf\\mypdf.pdf";
        Document document = new Document();
        
        PdfWriter.getInstance(document, new FileOutputStream(file_name));
        document.open();
        
        Paragraph p =new Paragraph("L'evenement:"+py.getTitre()+" lieu:"+py.getLieu());
        Paragraph p1 =new Paragraph("Lieu:"+py.getLieu());
        Paragraph p2 =new Paragraph("Date début Début:"+py.getDateevenet());
        
            com.itextpdf.text.Image img =com.itextpdf.text.Image.getInstance("C:\\Users\\asus\\Documents\\NetBeansProjects\\EvenelentGestion\\src\\gui\\img\\"+py.getImage());

        document.add(p);
        document.add(p1);
         document.add(p2);
          document.add(img);
        
        document.close();
        }
        
}
    

    

