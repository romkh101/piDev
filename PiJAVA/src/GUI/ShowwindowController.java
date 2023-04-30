/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Actualite;
import Services.ActualiteCRUD;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.text.ParseException;
import java.util.ResourceBundle;
import javafx.beans.value.ObservableValue;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableColumn.CellDataFeatures;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import javafx.util.Callback;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.transformation.FilteredList;
import javafx.scene.control.ComboBox;
import javafx.scene.control.MenuItem;
import javafx.scene.control.TableCell;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.image.Image;
import javafx.stage.FileChooser;
import javafx.stage.FileChooser.ExtensionFilter;
import javax.imageio.ImageIO;
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.pdmodel.PDPage;
import org.apache.pdfbox.pdmodel.PDPageContentStream;
import org.apache.pdfbox.pdmodel.font.PDType1Font;
import org.apache.pdfbox.pdmodel.graphics.image.LosslessFactory;
import org.apache.pdfbox.pdmodel.graphics.image.PDImageXObject;

/**
 * FXML Controller class
 *
 * @author Aziz
 */
public class ShowwindowController implements Initializable {
    private Actualite actualite;

    @FXML
    private TableView<Actualite> tvA;
    @FXML
    private TableColumn<Actualite, String> coltitre;
    @FXML
    private TableColumn<Actualite, String> colimage;
    @FXML
    private TableColumn<Actualite, String> colcontenu;
    @FXML
    private TableColumn<Actualite, String> colauteur;
    @FXML
    private TableColumn<Actualite, Date> coldate;
    @FXML
    private TableColumn<Actualite, String> colcategorie;
    
    @FXML
    private TableColumn<?, ?> colid;
    @FXML
    private Button btnModifier;
    @FXML
    private Button btnSupprimer;
    @FXML
    private Button btnPDF;
    @FXML
    private TextField searchtf;
    @FXML
    private ImageView bg;
    @FXML
    private ImageView logo;
    @FXML
    private MenuItem ajoutcat;
    @FXML
    private MenuItem gerercat;
    @FXML
    private MenuItem ajoutact;
    @FXML
    private MenuItem gereract;
   

    @FXML
    private void handleSupprimer(ActionEvent event) {
    Actualite selectedActualite = tvA.getSelectionModel().getSelectedItem();
    if (selectedActualite == null) {
        // show an error message if no actualite is selected
        Alert alert = new Alert(AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner une actualité à supprimer.");
        alert.showAndWait();
        return;
    }
    try {
        actualiteCRUD.supprimerActualite(selectedActualite);
        actualites = actualiteCRUD.listerActualite();
        tvA.setItems(actualites);
        tvA.refresh();
    } catch (Exception e) {
        System.out.println(e.getMessage());
    }
}
    @FXML
    private void handleModifier(ActionEvent event) throws IOException, ParseException {
  Actualite selectedActualite = tvA.getSelectionModel().getSelectedItem();
    if (selectedActualite == null) {
        // show an error message if no actualite is selected
        Alert alert = new Alert(AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner une actualité à modifier.");
        alert.showAndWait();
        return;
    }
    FXMLLoader loader = new FXMLLoader(getClass().getResource("/GUI/Editwindow.fxml"));
    Parent editWindowParent = loader.load();
    Scene editWindowScene = new Scene(editWindowParent);
    EditwindowController editWindowController = loader.getController();
    editWindowController.setActualite(selectedActualite);
    editWindowController.setTableView(tvA);
    Stage editWindowStage = new Stage();
    editWindowStage.setScene(editWindowScene);
    editWindowStage.showAndWait();
    
    actualites = actualiteCRUD.listerActualite();
        tvA.setItems(actualites);
        tvA.refresh();
    }


    private ActualiteCRUD actualiteCRUD;
    private ObservableList<Actualite> actualites;

    /**
     * Initializes the controller class.
     */
private void search(String query) {
    FilteredList<Actualite> filteredData = new FilteredList<>(actualites, p -> true);

    if (query == null || query.isEmpty()) {
        tvA.setItems(actualites);
        return;
    }

    filteredData.setPredicate(actualite -> {
        // Vérifie si la requête correspond à une des colonnes à rechercher
        if (actualite.getTitre().toLowerCase().contains(query.toLowerCase())) {
            return true; // Correspond à la colonne titre
        } else if (actualite.getAuteur().toLowerCase().contains(query.toLowerCase())) {
            return true; // Correspond à la colonne auteur
        } else if (actualite.getContenu().toLowerCase().contains(query.toLowerCase())) {
            return true; // Correspond à la colonne contenu
        } else if (actualite.getCategorie().getNom().toLowerCase().contains(query.toLowerCase())) {
            return true; // Correspond à la colonne catégorie
        } else {
            return false; // Ne correspond à aucune colonne
        }
    });

    tvA.setItems(filteredData);
}
    @Override
    public void initialize(URL url, ResourceBundle rb) {
    

            searchtf.textProperty().addListener((observable, oldValue, newValue) -> {
            search(newValue);
});
        try {
            actualiteCRUD = new ActualiteCRUD();

            // Initialize the columns
            colid.setCellValueFactory(new PropertyValueFactory<>("id"));
            coltitre.setCellValueFactory(new PropertyValueFactory<>("titre"));
            colauteur.setCellValueFactory(new PropertyValueFactory<>("auteur"));
            colimage.setCellValueFactory(cellData -> new SimpleStringProperty(cellData.getValue().getImage()));
colimage.setCellFactory(column -> new TableCell<Actualite, String>() {
    @Override
    protected void updateItem(String imageName, boolean empty) {
        super.updateItem(imageName, empty);
        if (empty || imageName == null) {
            setGraphic(null);
            
        } else {
            // Load the image file from the images directory
            File file = new File("src/images/" + imageName);
            Image image = new Image(file.toURI().toString());

            // Create an ImageView with the loaded image and set it as the cell's graphic
            ImageView imageView = new ImageView(image);
            imageView.setFitWidth(50);
            imageView.setPreserveRatio(true);
            setGraphic(imageView);
        }
    }
});
            colcontenu.setCellValueFactory(new PropertyValueFactory<>("contenu"));

            colcategorie.setCellValueFactory(new Callback<CellDataFeatures<Actualite, String>, ObservableValue<String>>() {
    @Override
    public ObservableValue<String> call(CellDataFeatures<Actualite, String> data) {
        return new SimpleStringProperty(data.getValue().getCategorie().getNom());
    }
});

            coldate.setCellValueFactory(new PropertyValueFactory<>("date"));

            actualites = actualiteCRUD.listerActualite();
            tvA.setItems(actualites);
            tvA.refresh();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }

               if (tvA.getItems().isEmpty()) {
    btnSupprimer.setVisible(false);
    btnModifier.setVisible(false);
    btnPDF.setVisible(false);
} else {
    btnSupprimer.setVisible(true);
    btnModifier.setVisible(true);
    btnPDF.setVisible(true);
}
    }

    @FXML
private void handlePDF(ActionEvent event) throws IOException {
    Actualite selectedActualite = tvA.getSelectionModel().getSelectedItem();
    if (selectedActualite == null) {
    Alert alert = new Alert(AlertType.ERROR);
    alert.setTitle("Error");
    alert.setHeaderText(null);
    alert.setContentText("Please select an actuality to generate the PDF.");
    alert.showAndWait();
    return;
}

// prompt the user to choose a file path and name for the PDF file
FileChooser fileChooser = new FileChooser();
fileChooser.setTitle("Save PDF");
fileChooser.getExtensionFilters().add(new ExtensionFilter("PDF Files", "*.pdf"));
File file = fileChooser.showSaveDialog(btnPDF.getScene().getWindow());

// the user cancelled the file save dialog
if (file == null) {
    return;
}

// create a new PDF document
PDDocument document = new PDDocument();

// add a new page to the document
PDPage page = new PDPage();
document.addPage(page);

// create a new content stream to write to the page
PDPageContentStream contentStream = new PDPageContentStream(document, page);

// get the image data from the selected actualite
String imagePath = "src/images/" + selectedActualite.getImage();
String logoPath = "src/images/abcspor.png";
BufferedImage bufferedImage = ImageIO.read(new File(imagePath));
BufferedImage bufferedLogo = ImageIO.read(new File(logoPath));

try {
    // convert the bufferedImage to a PDImageXObject
    PDImageXObject pdImage = LosslessFactory.createFromImage(document, bufferedImage);
    PDImageXObject logoImage = LosslessFactory.createFromImage(document, bufferedLogo);

    // draw the image onto the page
    contentStream.drawImage(pdImage, 50, 600, 500, 300);
    contentStream.drawImage(logoImage, 250, 50, 100, 50);

    // set the font and font size for the title
    contentStream.setFont(PDType1Font.HELVETICA_BOLD, 22);

    // write the title of the actualite to the page
    contentStream.beginText();
    contentStream.newLineAtOffset(50, 550);
    contentStream.showText(selectedActualite.getTitre());
    contentStream.endText();

    // set the font and font size for the content
    contentStream.setFont(PDType1Font.HELVETICA, 14);

    // write the content of the actualite to the page
    contentStream.beginText();
    contentStream.newLineAtOffset(50, 520);
    contentStream.showText(selectedActualite.getContenu());
    contentStream.endText();
    // set the font and font size for the author and date
    
    contentStream.setFont(PDType1Font.HELVETICA, 12);

    
    contentStream.beginText();
    contentStream.newLineAtOffset(50, 500);
    contentStream.showText(selectedActualite.getCategorie().getNom());
    contentStream.endText();
    // write the author of the actualite to the page
    contentStream.beginText();
    contentStream.newLineAtOffset(50, 480);
    contentStream.showText("Author: " + selectedActualite.getAuteur());
    contentStream.endText();

    // write the date of the actualite to the page
    contentStream.beginText();
    contentStream.newLineAtOffset(50, 450);
    contentStream.showText("Date: " + selectedActualite.getDate().toString());
    contentStream.endText();

    contentStream.beginText();
    contentStream.newLineAtOffset(200, 30);
    contentStream.showText("Copyright © 2023-abc sports, Inc. All rights reserved.");
    contentStream.endText();

        // close the content stream before saving the document
        contentStream.close();

        // save the PDF document to the chosen file path
        document.save(file);
    } catch (IOException e) {
        e.printStackTrace();
    }
}

    @FXML
private void handleajoutcat(ActionEvent event) {
    try {
        Parent root = FXMLLoader.load(getClass().getResource("addcategorie.fxml"));
        Scene scene = new Scene(root);
        Stage stage = new Stage(); // create a new stage
        stage.setScene(scene); // set the scene to the stage
        stage.show(); // show the stage
    } catch (IOException ex) {
        System.out.println(ex.getMessage());
    }
}

    @FXML
    private void handlegerercat(ActionEvent event) {
         try {
        Parent root = FXMLLoader.load(getClass().getResource("showcategorie.fxml"));
        Scene scene = new Scene(root);
        Stage stage = new Stage(); // create a new stage
        stage.setScene(scene); // set the scene to the stage
        stage.show(); // show the stage
    } catch (IOException ex) {
        System.out.println(ex.getMessage());
    }
    }

    @FXML
    private void handleajoutact(ActionEvent event) {
         try {
        Parent root = FXMLLoader.load(getClass().getResource("addactualite.fxml"));
        Scene scene = new Scene(root);
        Stage stage = new Stage(); // create a new stage
        stage.setScene(scene); // set the scene to the stage
        stage.show(); // show the stage
    } catch (IOException ex) {
        System.out.println(ex.getMessage());
    }
    }

    @FXML
    private void handlegenreract(ActionEvent event) {
         try {
        Parent root = FXMLLoader.load(getClass().getResource("showwindow.fxml"));
        Scene scene = new Scene(root);
        Stage stage = new Stage(); // create a new stage
        stage.setScene(scene); // set the scene to the stage
        stage.show(); // show the stage
    } catch (IOException ex) {
        System.out.println(ex.getMessage());
    }
    }
}
    
