// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class ModifyDBClusterMigrationRequest : TeaModel {
        [NameInMap("SecurityToken")]
        [Validation(Required=false)]
        public string SecurityToken { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("SourceRDSDBInstanceId")]
        [Validation(Required=true)]
        public string SourceRDSDBInstanceId { get; set; }

        [NameInMap("NewMasterInstanceId")]
        [Validation(Required=true)]
        public string NewMasterInstanceId { get; set; }

        [NameInMap("SwapConnectionString")]
        [Validation(Required=false)]
        public string SwapConnectionString { get; set; }

    }

}
