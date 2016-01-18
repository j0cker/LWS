<%@ Page Title="" Language="C#" MasterPageFile="~/RN.Master" AutoEventWireup="true" CodeBehind="Main.aspx.cs" Inherits="RecibosNomina.Main" %>
<%@ Register Assembly="PdfViewer CS 2k3" Namespace="PdfViewer" TagPrefix="cc1" %>
<%@ Register Src="~/ReciboIndividual.ascx" TagPrefix="uc1" TagName="ReciboIndividual" %>

<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <div style="float:left;  width:100%; height:70%; bottom:0px; overflow:auto;" >
        <div style="width:400px; float:left; position:relative;">
            
            <span><a>REGISTROS</a></span><br />
            <span>Página:<asp:DropDownList ID="cbPags" runat="server" AutoPostBack="True" OnSelectedIndexChanged="cbPags_SelectedIndexChanged"></asp:DropDownList></span>
            <span><asp:ImageButton ID="btnPrimero" ImageUrl="~/img/first.png" runat="server" Width="32px" OnClick="btnPrimero_Click"/></span>
            <span><asp:ImageButton ID="btnAnterior" runat="server" ImageUrl="~/img/prev.png" Width="32px" OnClick="btnAnterior_Click"/></span>
            
            <span><asp:ImageButton ID="btnSiguiente" runat="server" ImageUrl="~/img/next.png" Width="32px" OnClick="btnSiguiente_Click"/></span>
            <span><asp:ImageButton ID="btnUltimo" runat="server" ImageUrl="~/img/last.png" Width="32px" OnClick="btnUltimo_Click" /></span>
            
            <div>
                <uc1:ReciboIndividual runat="server" ID="ReciboIndividual" />
            </div><br />
            <div>
                  <uc1:ReciboIndividual runat="server" ID="ReciboIndividual1" />
            </div><br />
            <div>
                  <uc1:ReciboIndividual runat="server" ID="ReciboIndividual2" />
            </div><br />
            <div>
                  <uc1:ReciboIndividual runat="server" ID="ReciboIndividual3" />
            </div><br />
            <div>
                  <uc1:ReciboIndividual runat="server" ID="ReciboIndividual4" />
            </div>
        </div>
        
        <div style="margin-left:400px; width:100%-400px; height:680px; position:static;">
        <cc1:ShowPdf ID="ShowPdf1" runat="server"   BorderStyle="None" FilePath="" height="650px"   Width="99%" /></div></div>
</asp:Content>
