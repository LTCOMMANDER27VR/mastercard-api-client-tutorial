/*
 * MDES for Merchants
 *
 * The MDES APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br> __Authentication__ Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br> 1 . A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br>  __Encryption__<br>  All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br> __Additional Encryption of Sensitive Data__ In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java) 
 *
 * The version of the OpenAPI document: 1.2.10
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */


using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.IO;
using System.Runtime.Serialization;
using System.Text;
using System.Text.RegularExpressions;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using Newtonsoft.Json.Linq;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = Acme.App.MastercardApi.Client.Client.OpenAPIDateConverter;

namespace Acme.App.MastercardApi.Client.Model
{
    /// <summary>
    /// TokenDetailDataGetTokenOnly
    /// </summary>
    [DataContract(Name = "tokenDetailData_getToken_Only")]
    public partial class TokenDetailDataGetTokenOnly : IEquatable<TokenDetailDataGetTokenOnly>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="TokenDetailDataGetTokenOnly" /> class.
        /// </summary>
        /// <param name="tokenNumber">The Token Primary Account Number of the Card.  &lt;br&gt;__Max Length: 19__ &lt;br&gt;__Min Length: 9__ .</param>
        /// <param name="expiryMonth">The month of the token expiration date. &lt;br&gt; __Max Length: 2__ .</param>
        /// <param name="expiryYear">The year of the token expiration date. &lt;br&gt; __Max Length: 2__ .</param>
        /// <param name="paymentAccountReference">The unique account reference assigned to the PAN. Conditionally returned if the Token Requestor has opted to receive PAR and providing PAR is assigned by Mastercard or the Issuer provides PAR in the authorization message response. &lt;br&gt;    __Max Length: 29__ .</param>
        public TokenDetailDataGetTokenOnly(string tokenNumber = default(string), string expiryMonth = default(string), string expiryYear = default(string), string paymentAccountReference = default(string))
        {
            this.TokenNumber = tokenNumber;
            this.ExpiryMonth = expiryMonth;
            this.ExpiryYear = expiryYear;
            this.PaymentAccountReference = paymentAccountReference;
        }

        /// <summary>
        /// The Token Primary Account Number of the Card.  &lt;br&gt;__Max Length: 19__ &lt;br&gt;__Min Length: 9__ 
        /// </summary>
        /// <value>The Token Primary Account Number of the Card.  &lt;br&gt;__Max Length: 19__ &lt;br&gt;__Min Length: 9__ </value>
        [DataMember(Name = "tokenNumber", EmitDefaultValue = false)]
        public string TokenNumber { get; set; }

        /// <summary>
        /// The month of the token expiration date. &lt;br&gt; __Max Length: 2__ 
        /// </summary>
        /// <value>The month of the token expiration date. &lt;br&gt; __Max Length: 2__ </value>
        [DataMember(Name = "expiryMonth", EmitDefaultValue = false)]
        public string ExpiryMonth { get; set; }

        /// <summary>
        /// The year of the token expiration date. &lt;br&gt; __Max Length: 2__ 
        /// </summary>
        /// <value>The year of the token expiration date. &lt;br&gt; __Max Length: 2__ </value>
        [DataMember(Name = "expiryYear", EmitDefaultValue = false)]
        public string ExpiryYear { get; set; }

        /// <summary>
        /// The unique account reference assigned to the PAN. Conditionally returned if the Token Requestor has opted to receive PAR and providing PAR is assigned by Mastercard or the Issuer provides PAR in the authorization message response. &lt;br&gt;    __Max Length: 29__ 
        /// </summary>
        /// <value>The unique account reference assigned to the PAN. Conditionally returned if the Token Requestor has opted to receive PAR and providing PAR is assigned by Mastercard or the Issuer provides PAR in the authorization message response. &lt;br&gt;    __Max Length: 29__ </value>
        [DataMember(Name = "paymentAccountReference", EmitDefaultValue = false)]
        public string PaymentAccountReference { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class TokenDetailDataGetTokenOnly {\n");
            sb.Append("  TokenNumber: ").Append(TokenNumber).Append("\n");
            sb.Append("  ExpiryMonth: ").Append(ExpiryMonth).Append("\n");
            sb.Append("  ExpiryYear: ").Append(ExpiryYear).Append("\n");
            sb.Append("  PaymentAccountReference: ").Append(PaymentAccountReference).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return Newtonsoft.Json.JsonConvert.SerializeObject(this, Newtonsoft.Json.Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as TokenDetailDataGetTokenOnly);
        }

        /// <summary>
        /// Returns true if TokenDetailDataGetTokenOnly instances are equal
        /// </summary>
        /// <param name="input">Instance of TokenDetailDataGetTokenOnly to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(TokenDetailDataGetTokenOnly input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.TokenNumber == input.TokenNumber ||
                    (this.TokenNumber != null &&
                    this.TokenNumber.Equals(input.TokenNumber))
                ) && 
                (
                    this.ExpiryMonth == input.ExpiryMonth ||
                    (this.ExpiryMonth != null &&
                    this.ExpiryMonth.Equals(input.ExpiryMonth))
                ) && 
                (
                    this.ExpiryYear == input.ExpiryYear ||
                    (this.ExpiryYear != null &&
                    this.ExpiryYear.Equals(input.ExpiryYear))
                ) && 
                (
                    this.PaymentAccountReference == input.PaymentAccountReference ||
                    (this.PaymentAccountReference != null &&
                    this.PaymentAccountReference.Equals(input.PaymentAccountReference))
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.TokenNumber != null)
                    hashCode = hashCode * 59 + this.TokenNumber.GetHashCode();
                if (this.ExpiryMonth != null)
                    hashCode = hashCode * 59 + this.ExpiryMonth.GetHashCode();
                if (this.ExpiryYear != null)
                    hashCode = hashCode * 59 + this.ExpiryYear.GetHashCode();
                if (this.PaymentAccountReference != null)
                    hashCode = hashCode * 59 + this.PaymentAccountReference.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
