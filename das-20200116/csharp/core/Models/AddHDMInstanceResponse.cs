// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.DAS20200116.Models
{
    public class AddHDMInstanceResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("Synchro")]
        [Validation(Required=true)]
        public string Synchro { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AddHDMInstanceResponseData Data { get; set; }
        public class AddHDMInstanceResponseData : TeaModel {
            [NameInMap("InstanceId")]
            [Validation(Required=true)]
            public string InstanceId { get; set; }
            [NameInMap("VpcId")]
            [Validation(Required=true)]
            public string VpcId { get; set; }
            [NameInMap("Ip")]
            [Validation(Required=true)]
            public string Ip { get; set; }
            [NameInMap("Port")]
            [Validation(Required=true)]
            public int? Port { get; set; }
            [NameInMap("Uuid")]
            [Validation(Required=true)]
            public string Uuid { get; set; }
            [NameInMap("Role")]
            [Validation(Required=true)]
            public string Role { get; set; }
            [NameInMap("Code")]
            [Validation(Required=true)]
            public int? Code { get; set; }
            [NameInMap("Error")]
            [Validation(Required=true)]
            public string Error { get; set; }
            [NameInMap("TenantId")]
            [Validation(Required=true)]
            public string TenantId { get; set; }
            [NameInMap("OwnerId")]
            [Validation(Required=true)]
            public string OwnerId { get; set; }
            [NameInMap("Token")]
            [Validation(Required=true)]
            public string Token { get; set; }
            [NameInMap("CallerUid")]
            [Validation(Required=true)]
            public string CallerUid { get; set; }
        };

    }

}
