// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class CreateAgAccountResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("AgRelationDto")]
        [Validation(Required=true)]
        public CreateAgAccountResponseAgRelationDto AgRelationDto { get; set; }
        public class CreateAgAccountResponseAgRelationDto : TeaModel {
            [NameInMap("Pk")]
            [Validation(Required=true)]
            public string Pk { get; set; }
            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }
            [NameInMap("Mpk")]
            [Validation(Required=true)]
            public string Mpk { get; set; }
            [NameInMap("RamAdminRoleName")]
            [Validation(Required=true)]
            public string RamAdminRoleName { get; set; }
        };

    }

}
