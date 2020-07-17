// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class CreateDatabaseRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("DBName")]
        [Validation(Required=true)]
        public string DBName { get; set; }

        [NameInMap("CharacterSetName")]
        [Validation(Required=true)]
        public string CharacterSetName { get; set; }

        [NameInMap("DBDescription")]
        [Validation(Required=false)]
        public string DBDescription { get; set; }

        [NameInMap("AccountName")]
        [Validation(Required=false)]
        public string AccountName { get; set; }

        [NameInMap("AccountPrivilege")]
        [Validation(Required=false)]
        public string AccountPrivilege { get; set; }

        [NameInMap("Collate")]
        [Validation(Required=false)]
        public string Collate { get; set; }

        [NameInMap("Ctype")]
        [Validation(Required=false)]
        public string Ctype { get; set; }

    }

}
