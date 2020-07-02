// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateQualityEntityRequest : TeaModel {
        [NameInMap("ProjectName")]
        [Validation(Required=true)]
        public string ProjectName { get; set; }

        [NameInMap("TableName")]
        [Validation(Required=true)]
        public string TableName { get; set; }

        [NameInMap("EnvType")]
        [Validation(Required=true)]
        public string EnvType { get; set; }

        [NameInMap("MatchExpression")]
        [Validation(Required=true)]
        public string MatchExpression { get; set; }

        [NameInMap("EntityLevel")]
        [Validation(Required=true)]
        public int? EntityLevel { get; set; }

    }

}
