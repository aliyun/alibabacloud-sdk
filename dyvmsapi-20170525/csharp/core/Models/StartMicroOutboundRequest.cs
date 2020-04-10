// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class StartMicroOutboundRequest : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("ProdCode")]
        [Validation(Required=false)]
        public string ProdCode { get; set; }

        [NameInMap("AccountType")]
        [Validation(Required=false)]
        public string AccountType { get; set; }

        [NameInMap("AccountId")]
        [Validation(Required=false)]
        public string AccountId { get; set; }

        [NameInMap("CommandCode")]
        [Validation(Required=false)]
        public string CommandCode { get; set; }

        [NameInMap("CallingNumber")]
        [Validation(Required=false)]
        public string CallingNumber { get; set; }

        [NameInMap("CalledNumber")]
        [Validation(Required=false)]
        public string CalledNumber { get; set; }

        [NameInMap("ExtInfo")]
        [Validation(Required=false)]
        public string ExtInfo { get; set; }

        [NameInMap("AppName")]
        [Validation(Required=false)]
        public string AppName { get; set; }

    }

}
