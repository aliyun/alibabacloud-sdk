// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ModifySecurityIpsRequest : TeaModel {
        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("SecurityIps")]
        [Validation(Required=true)]
        public string SecurityIps { get; set; }

        [NameInMap("DBInstanceIPArrayName")]
        [Validation(Required=false)]
        public string DBInstanceIPArrayName { get; set; }

        [NameInMap("DBInstanceIPArrayAttribute")]
        [Validation(Required=false)]
        public string DBInstanceIPArrayAttribute { get; set; }

        [NameInMap("SecurityIPType")]
        [Validation(Required=false)]
        public string SecurityIPType { get; set; }

        [NameInMap("WhitelistNetworkType")]
        [Validation(Required=false)]
        public string WhitelistNetworkType { get; set; }

        [NameInMap("ModifyMode")]
        [Validation(Required=false)]
        public string ModifyMode { get; set; }

    }

}
