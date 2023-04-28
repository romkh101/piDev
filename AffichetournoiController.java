/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package athlete.Gui;

import athlete.entities.Tournoi;
import athlete.service.TournoiService;
import athlete.utils.GuiNavigate;
import athlete.utils.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.Pagination;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;

/**
 * FXML Controller class
 *
 * @author Acer
 */
public class AffichetournoiController implements Initializable {

    /**
     * Initializes the controller class.
     */
    TournoiService t=new TournoiService();
    @FXML
    private TableView<?> tblData;
    @FXML
    private Button statbtn;

    public AffichetournoiController() {
       connection = MyConnection.getinstance().getCnx();

    }
    PreparedStatement preparedStatement;
    Connection connection;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         tblData.setColumnResizePolicy(TableView.CONSTRAINED_RESIZE_POLICY);
        try {
            populateTableView(tblData,connection);
            
            /* fetColumnList();
            fetRowList();*/
            // TODO
        } catch (SQLException ex) {
            Logger.getLogger(AffichetournoiController.class.getName()).log(Level.SEVERE, null, ex);
        }
        // TODO
    }    

    private void affiche(ActionEvent event) {
         List<Tournoi> ttt=t.listerTournoi();
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("liste de tournois");
        alert.setHeaderText(null);
        
        // Create a StringBuilder to build the content of the alert
        StringBuilder content = new StringBuilder();
        for (Tournoi tt : ttt) {
            // Append user data to the content
            content.append("ID: ").append(tt.getId()).append("\n");
            content.append("ID: ").append(tt.getTitre()).append("\n");

            
            // Append more user data as needed
            content.append("\n"); // Add a newline separator between each user
            
        }
        
        // Set the content of the alert
        alert.setContentText(content.toString());
        
        // Show the alert
        alert.showAndWait();
    }
public static void populateTableView(TableView tableView, Connection connection) throws SQLException {
        // Clear any existing data in the TableView
        tableView.getItems().clear();

        // Create a statement to execute a query
        Statement statement = connection.createStatement();

        // Execute the query to fetch data from the database
        ResultSet resultSet = statement.executeQuery("SELECT titre, date FROM tournoi");

        // Create an ObservableList to hold the data
        ObservableList<Tournoi> data = FXCollections.observableArrayList();

        // Loop through the result set and add data to the ObservableList
        while (resultSet.next()) {
            String titre = resultSet.getString("titre");
            Date date = resultSet.getDate("date");

            data.add(new Tournoi(titre, date));
        }

        // Set the data in the TableView
        tableView.setItems(data);

        // Define table columns and associate them with data model properties
        TableColumn<Tournoi, String> nomColumn = new TableColumn<>("titre");
        nomColumn.setCellValueFactory(new PropertyValueFactory<>("titre"));

        TableColumn<Tournoi, Date> prenomColumn = new TableColumn<>("date");
prenomColumn.setCellValueFactory(new PropertyValueFactory<>("date"));
prenomColumn.setCellFactory(column -> {
    return new TableCell<Tournoi, Date>() {
        private final SimpleDateFormat format = new SimpleDateFormat("dd/MM/yyyy");

        @Override
        protected void updateItem(Date date, boolean empty) {
            super.updateItem(date, empty);
            if (empty || date == null) {
                setText(null);
            } else {
                setText(format.format(date));
            }
        }
    };
});

        
        tableView.getColumns().setAll(nomColumn, prenomColumn);
}


  @FXML
    private void statistiquess(ActionEvent event) throws IOException {
        GuiNavigate nav = new GuiNavigate();
        nav.navigate(event, "GestionAthlete", "/GestionAthlete/Gui/Tournoiajoutfx.fxml");
    
     
    }
}
