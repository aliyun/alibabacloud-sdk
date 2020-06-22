// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class CreateAgAccountRequest : TeaModel {
        [NameInMap("LoginEmail")]
        [Validation(Required=true)]
        public string LoginEmail { get; set; }

        [NameInMap("AccountAttr")]
        [Validation(Required=false)]
        public string AccountAttr { get; set; }

        [NameInMap("EnterpriseName")]
        [Validation(Required=false)]
        public string EnterpriseName { get; set; }

        [NameInMap("FirstName")]
        [Validation(Required=false)]
        public string FirstName { get; set; }

        [NameInMap("LastName")]
        [Validation(Required=false)]
        public string LastName { get; set; }

        [NameInMap("NationCode")]
        [Validation(Required=false)]
        public string NationCode { get; set; }

        [NameInMap("ProvinceName")]
        [Validation(Required=false)]
        public string ProvinceName { get; set; }

        [NameInMap("CityName")]
        [Validation(Required=false)]
        public string CityName { get; set; }

        [NameInMap("Postcode")]
        [Validation(Required=false)]
        public string Postcode { get; set; }

    }

}
